<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['g-recaptcha-response']) && isset($_POST['exform'])) {
    function post_captcha($user_response)
    {
        $fields_string = '';
        $fields = array(
            // old secret key= 6Le-QFIUAAAAAAjuZxcvKHCzx8_QBeNjzUkQRhWA
            'secret' => '6LfGgcEUAAAAAMv2maesmwl2f5kcSEDjupjoEOCh',
            'response' => $user_response
        );
        foreach ($fields as $key => $value)
            $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo '<script>alert("Sorry but you did not check the captcha verification. Please try again.")</script>';
    } else {
        $tmp_fld = $_POST;
        $ftitle = $_POST['fmtitle'];
        $subject = $ftitle . ' Form';

        // Upload ID
        $target_dir = "assets/files/exam/";
        $target_file = $target_dir . date('YmdHis') . rand(1000000000000, 9000000000000) . '.' . pathinfo($_FILES["idFile"]["name"], PATHINFO_EXTENSION);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $imgErr = '';

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "pdf") {
            $imgErr = "File is incorrect format.";
            $uploadOk = 0;
        }

        //Upload File
        if ($uploadOk) {
            if (move_uploaded_file($_FILES["idFile"]["tmp_name"], doc_root . $target_file)) {
                $tmp_fld["idFile"] = base_url . $target_file;
            } else {
                $imgErr = "Sorry, there was an error uploading your file.";
            }
        } else {
            $tmp_fld["idFile"] = $imgErr;
        }

        // Send Email
        unset($tmp_fld["exform"]);
        unset($tmp_fld["fmtitle"]);
        unset($tmp_fld["g-recaptcha-response"]);

        $body = '<p>This is a copy of response submitted from <a href="' . clink . '" target="_blank"><span style="font-weight: bold;text-transform: uppercase;">' .
            $ftitle . '</span></a>.</p><br>';
        $body .= '<table>';

        foreach ($tmp_fld as $key => $fld) {
            if (!empty($fld) && $key != "Subject" && $key != "Cashin" && $key != "idFile"
                && $key != "EnrolledToAnyExamBoard" && $key != "EnrolledToAnyEdexcelInITS"
                && $key != "WithConditionThatWillAffectExam") {
                $key = preg_replace('/(?<! )(?<!^)[A-Z]/', ' $0', $key);

                $body .= '<tr>';
                $body .= '<td style="border: 1px solid #525252;padding: 10px;">' . $key . '</td><td style="border: 1px solid #525252;padding: 10px;">' . $fld . '</td>';
                $body .= '</tr>';
            } elseif ($key == "Subject") {
                $body .= '<tr>';
                $body .= '<td style="border: 1px solid #525252;padding: 10px;">Subjects</td><td style="border: 1px solid #525252;padding: 10px;">';
                if (!empty($tmp_fld["Subject"] && $tmp_fld["Cashin"])) {
                    foreach ($tmp_fld["Subject"] as &$sb) {
                        if (array_search($sb, $tmp_fld["Cashin"], true) !== false) {
                            $sb = $sb . ' - No Cash In';
                        }
                    }
                }else{
                    foreach ($tmp_fld["Subject"] as &$sb) {
                        if (array_search($sb, $tmp_fld["Cashin"], true) !== false) {
                            $sb = $sb . '';
                        }
                    }
                }
                $body .= implode('<br>', $tmp_fld["Subject"]);
                $body .= '</td></tr>';
            } elseif ($key == "idFile") {
                $body .= '<tr>';
                $body .= '<td style="border: 1px solid #525252;padding: 10px;">Proof Of Identity</td><td style="border: 1px solid #525252;padding: 10px;"><a href="' . $tmp_fld["idFile"] . '" target="_blank">' . $tmp_fld["idFile"] . '</a></td>';
                $body .= '</tr>';
            } elseif ($key == "EnrolledToAnyExamBoard") {
                $body .= '<tr>';
                $body .= '<td style="border: 1px solid #525252;padding: 10px;">Have you enrolled in any examinations with any
                                        UK exam board before?</td><td style="border: 1px solid #525252;padding: 10px;">' . $fld . '</td>';
                $body .= '</tr>';
            } elseif ($key == "EnrolledToAnyEdexcelInITS") {
                $body .= '<tr>';
                $body .= '<td style="border: 1px solid #525252;padding: 10px;">Have you enrolled in any EdExcel examinations
                                        through ITS before?</td><td style="border: 1px solid #525252;padding: 10px;">' . $fld . '</td>';
                $body .= '</tr>';
            } elseif ($key == "WithConditionThatWillAffectExam") {
                $body .= '<tr>';
                $body .= '<td style="border: 1px solid #525252;padding: 10px;">Do you have any condition that would adversely
                                        affect your performance during exam?</td><td style="border: 1px solid #525252;padding: 10px;">' . $fld . '</td>';
                $body .= '</tr>';
            }
        }

        $body .= '</table>';

        $sendPost = sendExamForm($subject, $body);
        if ($sendPost === 0) {
            header('Location: ' . ''.base_url.'' . 'confirmation-page.php');
        } else {
            echo '<script>alert("We are encountering an error please email us directly at info@itseducation.asia.")</script>';
        }

    }
}
?>
