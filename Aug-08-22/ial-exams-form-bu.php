<!-- Execute Configuration File -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php'); ?>

<!--Initialization of Variables-->
<?php $title = "ITS Education Asia - Main Booking Form"; ?>

<?php include(templates . 'examsubmit-script.php'); ?>

<?php
$init_url = 'https://api.itseducation.asia/api/exam-form/subjects/1000';
$json_data = file_get_contents($init_url);
$res = json_decode($json_data);

$subjects = $res->subjects;
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

    <title><?= $title ?></title>

    <!-- Declared Global Resources -->
    <?php include(templates . 'gscript.php'); ?>

    <!-- Local Styles -->

    <style>

        .page-featured-title {
            background-color: #003760;
            color: #2e96db;
            line-height: 35px;
            padding: 30px 10px;
            text-align: center;
            text-transform: uppercase;
        }

        #ealbform h3 {
            font-size: 22px !important;
            color: #1f77bd;
            text-transform: uppercase;
        }

        .step-nos p {
            text-align: inherit !important;
        }

        form#ealbform {
            border: 1px solid #e6e6e6;
            padding: 35px;
            margin: auto;
        }

        /*New Styles*/

        .step-nositem a:hover {
            text-decoration: none;
        }

        .step-nositem:not(:last-child) {
            border-right: 1px solid #e8e8e8;
        }

        .step-nositem p:hover {
            cursor: no-drop;
        }

        .step-nositem a.finished p {
            color: #1fa024;
        }

        .step-nositem a.finished p:hover {
            cursor: inherit !important;
        }

        .step-nositem a.current p:hover {
            cursor: inherit !important;
        }

        .step-nositem a.current p, .step-nositem a.finished p:hover span {
            color: #1f77bd;
            transition: .5s;
        }

        .step-nositem p {
            font-weight: bold;
            color: #b1b1b1;
        }

        .step-nositem span {
            font-size: 30px;
        }

        .step-nositem small {
            font-size: 10px;
            text-transform: uppercase;
            color: #5f5f5f;
        }

        .m-small {
            display: none;
            font-size: 12px !important;
            font-weight: 300;
            text-transform: uppercase;
        }

        .error-msg-div {
            border: 1px solid #ff9f9f;
            border-radius: 20px;
            display: none;
        }

        .error-msg-div p {
            line-height: 27px;
            font-size: 13px;
        }

        .error-msg-div strong {
            font-size: 18px;
        }

        .error-msg-div span, .error-msg-div strong {
            color: red;
        }

        #bs-table tr td, #bs-table tr th {
            text-align: center;
        }

        #bs-table tr td input {
            -ms-transform: scale(2);
            -moz-transform: scale(2);
            -webkit-transform: scale(2);
            -o-transform: scale(2);
            transform: scale(2);
            margin: 0px;
            padding: 0px;
            position: relative;
        }

        .cash-in-chb {
            -ms-transform: scale(1.3) !important;
            -moz-transform: scale(1.3) !important;
            -webkit-transform: scale(1.3) !important;
            -o-transform: scale(1.3) !important;
            transform: scale(1.3) !important;
        }

        .t-c-fw {
            max-width: 46rem;
        }

        @media (max-width: 768px) {

            .step-nositem span {
                line-height: 25px;
            }

            .step-nositem small {
                display: none;
            }

            .m-small {
                display: inherit;
            }
        }

    </style>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript">
        var onloadCallback = function () {
            grecaptcha.render('html_element', {
                'sitekey': '6LfGgcEUAAAAAGfG3bJgO1qJaGLOXhD_i1MRAUiz'
            });
        };
    </script>
</head>
<body>

<div class="container-fluid">

    <!-- upper header-->
    <?php include(templates . 'fnu-header.php'); ?>

    <!--    main navigation-->
    <?php include(templates . 'main-nav.php'); ?>

</div>


<div class="container p-content">
    <div class="row">
        <!--        main content-->
        <div class="col-xl-9 col-lg-8 col-md-8 m-content">

            <h1 class="page-featured-title text-uppercase"><?= $res->title ?> Form</h1>

            <p class="text-center my-5">This form should take you approximately 10 minutes to complete.</p>

            <hr>

            <div>

                <div id="fdc-con" class="mb-5">

                    <!--List of Step Items-->
                    <div class="row py-0 py-md-3 step-nos">

                        <div class="col-3 text-center step-nositem">
                            <a class="current" href="#step-1">
                                <p class="my-md-0 my-3"><span class="m-small">Step<br></span><span
                                            class="font-weight-bold">1</span><br>
                                    <small>Information</small>
                                </p>
                            </a>
                        </div>
                        <div class="col-3 text-center step-nositem">
                            <a class="disabled" href="#step-2">
                                <p class="my-md-0 my-3"><span class="m-small">Step<br></span><span
                                            class="font-weight-bold">2</span><br>
                                    <small>Academic</small>
                                </p>
                            </a>
                        </div>
                        <div class="col-3 text-center step-nositem">
                            <a class="disabled" href="#step-3">
                                <p class="my-md-0 my-3"><span class="m-small">Step<br></span><span
                                            class="font-weight-bold">3</span><br>
                                    <small>Subjects</small>
                                </p>
                            </a>
                        </div>
                        <div class="col-3 text-center step-nositem">
                            <a class="disabled" href="#step-4">
                                <p class="my-md-0 my-3"><span class="m-small">Step<br></span><span
                                            class="font-weight-bold">4</span><br>
                                    <small>ID & Form Submission</small>
                                </p>
                            </a>
                        </div>
                    </div>

                    <!--Error Message-->
                    <div id="error-msg" class="error-msg-div p-2 mb-3 mt-3">
                        <p class="m-0 p-0 text-center"><strong style="color:red;">There was a problem in this
                                step</strong>.<br>Please make sure all <span class="alert-danger px-1 font-weight-bold"
                                                                             style="color:red;">highlighted</span>
                            fields below is valid and not empty. </p>
                    </div>

                    <form id="ealbform" enctype="multipart/form-data" method="POST" class="mt-3">

                        <input type="hidden" name="exform" value="submit">

                        <input type="hidden" name="fmtitle" value="<?= $res->title ?> Form">

                        <div class="panel panel-primary setup-content" id="step-1">
                            <div class="panel-body">

                                <fieldset class="form-group text-center">
                                    <label class="pt-0 font-weight-bold">Candidate Enrolling Is :</label>
                                    <div class="ml-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="PaymentResponsibility"
                                                   id="stat1"
                                                   value="Personally Responsible" onchange="toggleGS()" checked>
                                            <label class="form-check-label" for="stat1">
                                                Personally responsible for payment
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="PaymentResponsibility"
                                                   id="stat2"
                                                   value="Not Responsible" onchange="toggleGS()">
                                            <label class="form-check-label" for="stat2">
                                                NOT responsible for payment
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div>
                                    <hr class="my-5">
                                    <div class="panel-heading mb-4">
                                        <h3 class="panel-title text-center font-weight-bold">Candidate Particulars</h3>
                                    </div>
                                    <div class="form-group ">
                                        <label class="font-weight-bold">Name in English<small>(as shown in your HKID or
                                                Passport)</small> :</label>
                                        <div class="ml-2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" id="CandidateGivenName"
                                                           data-name="CandidateGivenName"
                                                           name="CandidateGivenName"
                                                           class="form-control" placeholder="Candidate Given Name(s)"
                                                           required></div>
                                                <div class="col-md-6">
                                                    <input type="text" id="CandidateFamilyName"
                                                           data-name="CandidateFamilyName"
                                                           name="CandidateFamilyName"
                                                           class="form-control" placeholder="Candidate Family Name"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label class="pt-0 font-weight-bold">Gender
                                                    :</label>
                                                <div class="ml-2">
                                                    <select id="CandidateGender" name="CandidateGender"
                                                            class="form-control"
                                                            required>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label class="pt-0 font-weight-bold">Date Of Birth
                                                    :</label>
                                                <div class="ml-2">
                                                    <input type="text" name="CandidateDateOfBirth" id="DateOfBirth"
                                                           class="form-control"
                                                           placeholder="" required>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label class="pt-0 font-weight-bold">HKID Card #
                                                    :</label>
                                                <div class="ml-2">
                                                    <input type="text" name="HKIDCardNo" id="HKIDCardNo"
                                                           class="form-control"
                                                           placeholder="">
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label class="pt-0 font-weight-bold">Passport <small>( Please provide in
                                                        case no HKID )</small>
                                                    :</label>
                                                <div class="ml-2">
                                                    <input type="text" name="Passport" id="Passport"
                                                           class="form-control"
                                                           placeholder="" required>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label class="pt-0 font-weight-bold">Country of Passport <small>( Please
                                                        provide in case no HKID )</small>
                                                    :</label>
                                                <div class="ml-2">
                                                    <select id="CountryOfPassport" name="CountryOfPassport"
                                                            class="form-control" required>
                                                        <option value="">Select Country</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Åland Islands">Åland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian
                                                            Ocean Territory
                                                        </option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic
                                                        </option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                            Islands
                                                        </option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo, The Democratic Republic of The">Congo, The
                                                            Democratic Republic of The
                                                        </option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                            (Malvinas)
                                                        </option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern
                                                            Territories
                                                        </option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and Mcdonald Islands">Heard Island
                                                            and Mcdonald Islands
                                                        </option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican
                                                            City State)
                                                        </option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic
                                                            of
                                                        </option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of">Korea,
                                                            Democratic People's Republic of
                                                        </option>
                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's
                                                            Democratic Republic
                                                        </option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                        </option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia, The Former Yugoslav Republic of">
                                                            Macedonia, The Former Yugoslav Republic of
                                                        </option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States of">Micronesia,
                                                            Federated States of
                                                        </option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of
                                                        </option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="Netherlands Antilles">Netherlands Antilles
                                                        </option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana
                                                            Islands
                                                        </option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestinian Territory, Occupied">Palestinian
                                                            Territory, Occupied
                                                        </option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                            Miquelon
                                                        </option>
                                                        <option value="Saint Vincent and The Grenadines">Saint Vincent
                                                            and The Grenadines
                                                        </option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia and The South Sandwich Islands">
                                                            South Georgia and The South Sandwich Islands
                                                        </option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic
                                                        </option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania, United Republic of">Tanzania, United
                                                            Republic of
                                                        </option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-leste">Timor-leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos
                                                            Islands
                                                        </option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Minor Outlying Islands">United
                                                            States Minor Outlying Islands
                                                        </option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands,
                                                            British
                                                        </option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                        </option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <fieldset class="form-group">
                                                <label class="pt-0 font-weight-bold">Current School
                                                    :</label>
                                                <div class="ml-2">
                                                    <input type="text" name="CurrentSchool" id="CurrentSchool"
                                                           class="form-control"
                                                           placeholder="" required>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label class="pt-0 font-weight-bold">Year / Level
                                                    :</label>
                                                <div class="ml-2">
                                                    <input type="text" name="YearLevel" id="YearLevel"
                                                           class="form-control"
                                                           placeholder="" required>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label class="font-weight-bold">Address :</label>
                                        <div class="ml-2">
                                            <input type="text" id="Address" data-name="Address"
                                                   name="Address" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="font-weight-bold">Email Address
                                                    :</label>
                                                <div class="ml-2">
                                                    <input type="email" id="CandidateEmail" data-name="CandidateEmail"
                                                           name="CandidateEmail" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label class="pt-0 font-weight-bold">Mobile Number
                                                    :</label>
                                                <div class="ml-2">
                                                    <input type="text" name="CandidateMobileNumber" id="MobileNumber"
                                                           class="form-control"
                                                           placeholder="" required>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div id="af-nstud" class="d-none">
                                    <hr class="my-5">
                                    <div class="panel-heading mb-4">
                                        <h3 class="panel-title text-center font-weight-bold">Payor's Particulars</h3>
                                    </div>

                                    <fieldset class="form-group text-center">
                                        <label class="pt-0 font-weight-bold">Who is paying this examination?</label>
                                        <div class="ml-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input inp-gstud" type="radio"
                                                       data-name="PayorType" name="PayorType" value="Person" id="pt1"
                                                       checked>
                                                <label class="form-check-label" for="pt1">
                                                    Person
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input inp-gstud" type="radio"
                                                       data-name="PayorType" name="PayorType" value="Company" id="pt2">
                                                <label class="form-check-label" for="pt2">
                                                    Company
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="form-group d-none" id="payor-company">
                                        <label class="font-weight-bold">Company Name: </label>
                                        <div class="ml-2">
                                            <input type="text" id="CompanyName" name="CompanyName"
                                                   data-name="CompanyName"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group" id="payor-person">
                                        <label class="font-weight-bold">Name in English<span
                                                    style="color: red;"> *</span> :</label>
                                        <div class="ml-2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" id="PayorsGivenName"
                                                           data-name="PayorsGivenName"
                                                           class="form-control inp-gstud"
                                                           name="PayorsGivenName"
                                                           placeholder="Payor's Given Name(s)"></div>
                                                <div class="col-md-6">
                                                    <input type="text" id="PayorsFamilyName"
                                                           data-name="PayorsFamilyName"
                                                           class="form-control inp-gstud"
                                                           name="PayorsFamilyName"
                                                           placeholder="Payor's Family Name"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="font-weight-bold">Email Address
                                                    :</label>
                                                <div class="ml-2">
                                                    <input type="email" id="PayorsEmail" data-name="PayorsEmail"
                                                           name="PayorsEmail" class="form-control inp-gstud">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label class="pt-0 font-weight-bold">Mobile Number
                                                    :</label>
                                                <div class="ml-2">
                                                    <input type="text" name="PayorsMobile" data-name="PayorsMobile"
                                                           id="PayorsMobile" class="form-control inp-gstud"
                                                           placeholder="">
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label class="font-weight-bold">Postal Address
                                            :</label>
                                        <div class="ml-2">
                                            <input type="text" id="PayorsPostalAddress" data-name="PayorsPostalAddress"
                                                   name="PayorsPostalAddress" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary nextBtn mt-3" type="button">Next Step</button>
                                </div>

                            </div>

                        </div>

                        <div class="panel panel-primary setup-content" style="display: none" id="step-2">

                            <div class="panel-heading mb-4">
                                <h3 class="panel-title text-center font-weight-bold">Academic Particulars</h3>
                            </div>
                            <div class="panel-body">

                                <fieldset class="form-group text-center">
                                    <label class="pt-0 font-weight-bold">Have you enrolled in any examinations with any
                                        UK exam board before?</label>
                                    <div class="ml-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                   data-name="EnrolledToAnyExamBoard" name="EnrolledToAnyExamBoard"
                                                   value="Yes" id="ac1a" onchange="toggleAc1(true)"
                                                   required>
                                            <label class="form-check-label" for="ac1a">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                   data-name="EnrolledToAnyExamBoard" name="EnrolledToAnyExamBoard"
                                                   value="No" onchange="toggleAc1(false)"
                                                   id="ac1b" required>
                                            <label class="form-check-label" for="ac1b">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="row d-none" id="ac1-opt">
                                    <div class="col-md-7 mx-auto">
                                        <div class="form-group text-center">
                                            <label class="font-weight-bold mb-0">Your UCI (Unique Client
                                                Identifier)</label><br>
                                            <small>Leave blank if you forgot your UCI</small>
                                            <div class="ml-2 mt-1">
                                                <input type="text" id="UniqueClientIdentifier"
                                                       data-name="UniqueClientIdentifier" name="UniqueClientIdentifier"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <d class="row">
                                    <div class="col-md-7 mx-auto">
                                        <hr>
                                    </div>
                                </d>

                                <fieldset class="form-group text-center">
                                    <label class="pt-0 font-weight-bold">Have you enrolled in any EdExcel examinations
                                        through ITS before?</label>
                                    <div class="ml-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                   data-name="EnrolledToAnyEdexcelInITS"
                                                   name="EnrolledToAnyEdexcelInITS" value="Yes" id="ac2a"
                                                   required>
                                            <label class="form-check-label" for="ac2a">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                   data-name="EnrolledToAnyEdexcelInITS"
                                                   name="EnrolledToAnyEdexcelInITS" value="No"
                                                   id="ac2b" required>
                                            <label class="form-check-label" for="ac2b">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <d class="row">
                                    <div class="col-md-7 mx-auto">
                                        <hr>
                                    </div>
                                </d>

                                <fieldset class="form-group text-center">
                                    <label class="pt-0 font-weight-bold">Do you have any condition that would adversely
                                        affect your performance during exam?</label>
                                    <div class="ml-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                   data-name="WithConditionThatWillAffectExam"
                                                   name="WithConditionThatWillAffectExam" value="Yes" id="ac3a"
                                                   onchange="toggleAc3(true)"
                                                   required>
                                            <label class="form-check-label" for="ac3a">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                   data-name="WithConditionThatWillAffectExam"
                                                   name="WithConditionThatWillAffectExam" value="No"
                                                   onchange="toggleAc3(false)"
                                                   id="ac3b" required>
                                            <label class="form-check-label" for="ac3b">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="row d-none" id="ac3-opt">
                                    <div class="col-md-7 mx-auto">
                                        <div class="form-group text-center">
                                            <label class="font-weight-bold mb-0">Specify Your Condition</label>
                                            <div class="ml-2 mt-1">
                                                <input type="text" id="SpecifyCondition" data-name="SpecifyCondition"
                                                       name="SpecifyCondition"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button class="btn btn-primary nextBtn mt-3" type="button">Next Step</button>
                                </div>

                            </div>

                        </div>

                        <div class="panel panel-primary setup-content" style="display: none" id="step-3">

                            <div class="panel-heading mb-4">
                                <h3 class="panel-title text-center font-weight-bold">Unit Selection</h3>
                            </div>
                            <div class="panel-body">

                                <fieldset class="form-group">
                                    <p class="pt-0 text-center">( Select each unit you wish to enrol in for this
                                        session. )</p>
                                    <div class="ml-2">
                                        <div class="row">
                                            <div class="col-md-12 table-responsive">
                                                <table id="bs-table" class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col">Subject</th>
                                                        <th scope="col">Unit</th>
                                                        <th scope="col">Cash In <a href="javascript:void(0)"
                                                                                      data-toggle="modal"
                                                                                      data-target="#exampleModalLong"><i
                                                                        class="fa fa-question-circle-o"
                                                                        aria-hidden="true"></i></a></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($subjects as $sb): ?>
                                                        <?php if ($sb->status): ?>
                                                            <tr>
                                                                <td><input class="form-check-input" type="checkbox"
                                                                           name="Subject[]" value="<?=$sb->subject_name.'|'.$sb->unit?>"></td>
                                                                <td><?= $sb->subject_name ?></td>
                                                                <td><?= $sb->unit ?></td>
                                                                <td>No <input class="form-check-input ml-2 cash-in-chb"
                                                                              type="checkbox" name="Cashin[]"
                                                                              value="<?=$sb->subject_name.'|'.$sb->unit?>"></td>
                                                            </tr>
                                                        <?php endif; endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="text-right">
                                    <button class="btn btn-primary nextBtn mt-3" type="button">Next Step</button>
                                </div>

                            </div>

                        </div>

                        <div class="panel panel-primary setup-content" style="display: none" id="step-4">
                            <div class="panel-heading mb-4">
                                <h3 class="panel-title text-center font-weight-bold">Form Submission</h3>
                            </div>
                            <div class="panel-body">

                                <div class="form-group t-c-fw mx-auto mb-4">
                                    <p class="text-center mb-1 mt-4"><strong>Type Of ID You Want To Submit</strong></p>
                                    <div class="form-group text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="TypeOfID"
                                                   id="typeOfID1" data-name="TypeOfID" value="HKID" required>
                                            <label class="form-check-label" for="typeOfID1">HKID</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="TypeOfID" data-name="TypeOfID"
                                                   id="typeOfID2" value="Passport" required>
                                            <label class="form-check-label" for="typeOfID2">Passport</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group t-c-fw mx-auto">
                                    <p class="text-center"><strong>Proof Of Identity</strong><br><small>( You must
                                            submit a proof of identity along with your enrolment form )</small></p>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="idFile" name="idFile">
                                        <label class="custom-file-label" for="idFile">You may only upload PDF, JPG
                                            and PNG files.</label>
                                    </div>
                                </div>

                                <hr class="my-5">

                                <p class="pt-0 font-weight-bold text-center">Terms &
                                    Conditions</p>
                                <div class="p-3 text-center" style="border: 1px solid #e4e4e4;">
                                    <small>
                                        Our terms & conditions contain important information about your booking. Please
                                        read them: <a href="https://www.itseducation.asia/exam-booking.html"
                                                      target="_blank">Terms
                                            & Conditions</a>.
                                    </small>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="tac" required>
                                        <label class="form-check-label" for="tac">
                                            <small class="text-capitalize font-weight-bold">I accept the terms and
                                                conditions
                                            </small>
                                        </label>
                                    </div>
                                </div>

                                <div id="html_element" class="d-flex justify-content-end mt-4"
                                     data-sitekey="6LfGgcEUAAAAAGfG3bJgO1qJaGLOXhD_i1MRAUiz"></div>
                                <!-- <div class="form-group" style="padding-top: 25px;">
                                     <div class="g-recaptcha"
                                          data-sitekey="6LfGgcEUAAAAAGfG3bJgO1qJaGLOXhD_i1MRAUiz"></div>
                                 </div> -->

                                <div class="text-right mt-3">
                                    <button class="btn btn-success nextBtn" type="submit">Submit</button>
                                </div>

                            </div>
                        </div>

                    </form>


                </div>

            </div>

        </div>

        <!--        sidebars-->
        <div class="col-xl-3 col-lg-4 col-md-4">

            <!--        sidebar banner carousel-->
            <?php include(templates . 'sb-bannercarousel.php'); ?>

            <!--        sidebar menu-->
            <?php include(templates . 'sb-menu.php'); ?>

            <!--        sidebar quotes-->
            <?php include(templates . 'sb-quotes.php'); ?>

        </div>
    </div>
</div>

<!-- No Cash In Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">What Is Cash-In?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Cashing-in is the mechanism for generating a certificate. If you have to complete three units in
                    order to complete the AS qualification, and you do all three you won’t automatically get a
                    certificate. Instead, the units will stay in your account. If you want a certificate to be
                    generated, the cash-in must be applied for.</p>

                <p>Cash-ins are automatically applied to eligible units toward the completion of a particular
                    qualification. Depending on the subject, the units toward a certificate may differ.</p>

                <p>Example 1. Science subjects such as Chemistry has 6 units<br>
                    3 units (Units 1,2,3) for AS cashin toward an AS certificate<br>
                    3 units (Units 4,5,6) for A2 cashin toward an A2 certificate</p>

                <p>If you cash in for Units 1,2,3 you will be awarded an AS certificate for CHEMISTRY.<br>
                    If you cash in for Units 4,5,6 you will be awarded an A2 certificate for CHEMISTRY.</p>

                <p>Example 2. Humanities subjects such as History have 4 units<br>
                    2 units (Unit 1,2) for AS cashin toward an AS certificate<br>
                    2 units (Unit 3,4) for A2 cashin toward an A2 certificate</p>

                <p>If you cash in for Units 1,2 you will be awarded an AS certificate for HISTORY.<br>
                    If you cash in for Units 3,4 you will be awarded an A2 certificate for HISTORY.</p>

                <p>Note that you cannot be cashed in for A2 certificate (the full A-level qualification) until you have
                    completed all units toward that qualification.</p>

                <p>Usually, cash ins are applied automatically as these can be reapplied in succeeding sessions should
                    the student need to resit a unit toward a particular cashin, resulting in a new certificate to be
                    issued with updated results.</p>

                <p>Cash ins will not be applied for candidates who opt to cash in at the end, once the results for all
                    units are final or if they are using units toward a particular qualification (as in the case of
                    shared units toward Regular Math / Further Pure Math / Pure Math).</p>

                <p>Late cashins can be applied for but are charged and take time to be applied.<br>
                    This is particularly important if a student needs a final grade for qualifying to university as the
                    university deadline might be approaching and if they did not cashin earlier, they will have to wait
                    and it might be two or three weeks which is past their deadline.</p>

                <p><strong>It is always better to cash in if  eligible. i.e. leave the box unchecked</strong></p>

            </div>
        </div>
    </div>
</div>

<!-- widgets -->
<?php include(templates . 'bg-image.php'); ?>

<?php include(templates . 'back-to-top.php'); ?>

<?php include(templates . 'mobile-icons.php'); ?>

<?php include(templates . 'fixed-social-icons.php'); ?>

<?php include(templates . 'contactus-modal.php'); ?>

<?php include(templates . 'sb-exam-modal.php'); ?>
<!--end widget-->

<?php include(templates . 'footer.php'); ?>

<?php include(templates . 'scripts.php'); ?>

<script>

    var returningStudent = false;
    var preferredOnline = false;

    function toggleYear(yid) {

        var sid = yid;
        var year = ["HKYear", "USYear", "UKYear"];

        $.each(year, function (i, val) {
            var elm = $("#" + val);

            if (val === yid) {
                elm.prop('required', true);
                elm.attr("name", sid);

                elm.removeClass("d-none");
                elm.addClass("d-block");
            } else {
                elm.prop('required', false);
                elm.removeAttr("name");

                elm.removeClass("d-block");
                elm.addClass("d-none");
            }
        });

    }

    function toggleAS(asid) {
        var sid = 'Subject' + asid;
        var elm = $('#' + sid);

        elm.toggleClass("d-none d-block");

        if (elm.prop('required')) {
            elm.prop('required', false);
            elm.removeAttr("name");
        } else {
            elm.prop('required', true);
            elm.attr("name", sid);
        }

        sid = 'SyllabusBoard' + asid;
        elm = $('#' + sid);

        elm.toggleClass("d-none d-block");

        if (elm.prop('required')) {
            elm.prop('required', false);
            elm.removeAttr("name");
        } else {
            elm.prop('required', true);
            elm.attr("name", sid);
        }

        sid = 'ExamDate' + asid;
        elm = $('#' + sid);
        elm.toggleClass("d-none d-block");

        var attr = elm.attr('name');

        if (typeof attr !== typeof undefined && attr !== false)
            elm.removeAttr("name");
        else
            elm.attr("name", sid);

    };

    function toggleGS() {
        $('#af-nstud').toggleClass("d-none d-block");

        returningStudent = !returningStudent;

        var elm = $('.inp-gstud');
        elm.each(function () {

            if ($(this).prop('required')) {
                $(this).prop('required', false);
                $(this).removeAttr("name");
            } else {
                $(this).prop('required', true);
                var ename = $(this).data('name');
                $(this).attr("name", ename);
            }

        });

        var elm2 = $('.inp-gstud-n');

        elm2.each(function () {

            var attr = $(this).attr('name');

            if (typeof attr !== typeof undefined && attr !== false) {
                $(this).removeAttr("name");
            } else {
                var ename = $(this).data('name');
                $(this).attr("name", ename);
            }


        });

    };

    function toggleAc1(chk) {
        if (chk) {
            $('#ac1-opt').removeClass('d-none');
            $('#ac1-opt').addClass('d-block');
        } else {
            $('#ac1-opt').removeClass('d-block');
            $('#ac1-opt').addClass('d-none');
        }

    };

    function toggleAc3(chk) {
        if (chk) {
            $('#ac3-opt').removeClass('d-none');
            $('#ac3-opt').addClass('d-block');
        } else {
            $('#ac3-opt').removeClass('d-block');
            $('#ac3-opt').addClass('d-none');
        }
    };

    function togglePL() {
        $('#pfs-nstud').toggleClass("d-none d-block");

        preferredOnline = !preferredOnline;

        var elm = $('.inp-plo');
        elm.each(function () {

            if ($(this).prop('required')) {
                $(this).prop('required', false);
                $(this).removeAttr("name");
            } else {
                $(this).prop('required', true);
                var ename = $(this).data('name');
                $(this).attr("name", ename);
            }

        });

    };

    $(document).ready(function () {
        $('input[type=radio][name=PayorType]').change(function () {
            if ($(this).val() === 'Person') {
                $('#payor-company').removeClass('d-block');
                $('#payor-company').addClass('d-none');
                $('#PayorsFamilyName').attr("name", "PayorsFamilyName");
                $('#PayorsGivenName').attr("name", "PayorsGivenName");
                $('#CompanyName').removeAttr("name");
                $('#CompanyName').prop('required', false);
                $('#payor-person').removeClass('d-none');
                $('#payor-person').addClass('d-block');
                $('#PayorsFamilyName').prop('required', true);
                $('#PayorsGivenName').prop('required', true);
            } else if ($(this).val() === 'Company') {
                $('#payor-person').removeClass('d-block');
                $('#payor-person').addClass('d-none');
                $('#PayorsFamilyName').prop('required', false);
                $('#PayorsGivenName').prop('required', false);
                $('#payor-company').removeClass('d-none');
                $('#payor-company').addClass('d-block');
                $('#CompanyName').prop('required', true);
                $('#PayorsFamilyName').removeAttr("name");
                $('#PayorsGivenName').removeAttr("name");
                $('#CompanyName').attr("name", "CompanyName");
            }
        });


        $("#HKIDCardNo").focusout(function () {
            var input = $(this).val();
            if ($(this).val() !== '') {
                $("#Passport").prop('required', false);
                $("#CountryOfPassport").prop('required', false);
            } else {
                $("#Passport").prop('required', true);
                $("#CountryOfPassport").prop('required', true);
            }
        });

        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        $("#DateOfBirth").datepicker({
            changeMonth: true,
            changeYear: true
        });
        $("#DateOfBirth").datepicker("option", "dateFormat", "dd/mm/yy");

        $("#FirstLesson").datepicker();
        $("#LastLesson").datepicker();
        $("#FirstLesson").datepicker("option", "dateFormat", "DD, d MM, yy");
        $("#LastLesson").datepicker("option", "dateFormat", "DD, d MM, yy");

        var stepListItems = $('div.step-nos div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        stepListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                $('.current').removeClass('current').addClass('finished');
                $item.addClass('current');
                allWells.hide();
                $('#error-msg').hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.step-nos a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url'],input[type='email'],input[type='radio'], select"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {

                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");

                    $(curInputs[i]).addClass("alert-danger");

                    if ($(curInputs[i]).is("input[type='radio']")) {
                        $(curInputs[i]).parent().addClass("alert-danger");
                    }

                } else {
                    $(curInputs[i]).removeClass("alert-danger");

                    if ($(curInputs[i]).is("input[type='radio']")) {
                        $(curInputs[i]).parent().removeClass("alert-danger");
                    }
                }
            }

            $('#error-msg').show();

            if (!isValid && curStepBtn != "step-4") {
                $('html, body').animate({
                    scrollTop: $('#fdc-con').offset().top
                }, 500);
            }

            if (isValid) {
                nextStepWizard.removeClass('disabled').trigger('click');

                $('#error-msg').hide();
            }

        });

        $('div.step-nos div a.current').trigger('click');

    });


</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </body>
    </html>