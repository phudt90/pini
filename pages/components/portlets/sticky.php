tables.php<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php'; ?>

<body class="m-content--skin-light2">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/pre_wrapper.php'; ?>

<div id="wrapper" class="wrapper full-width">
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php'; ?>

  <div class="container">
    <div class="m-body">
      <div class="m-content">
        <div class="m-panel">
          <div class="m-panel__heading">
            <h1 class="h3">Sticky Head</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--last m-portlet--head-lg m-portlet--responsive-mobile" id="main_portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-progress"><!-- here can place a progress bar--></div>
                <div class="m-portlet__head-wrapper">
                  <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
							<span class="m-portlet__head-icon">
								<i class="flaticon-map-location"></i>
							</span>
                      <h3 class="m-portlet__head-text">
                        Sticky Head Portlet
                      </h3>
                    </div>
                  </div>
                  <div class="m-portlet__head-tools">
                    <a href="#" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
							<span>
								<i class="la la-arrow-left"></i>
								<span>Back</span>
							</span>
                    </a>

                    <a href="#" class="btn btn-metal m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
							<span>
								<i class="la la-puzzle-piece"></i>
								<span>Add Attributes</span>
							</span>
                    </a>

                    <div class="btn-group">
                      <button type="button" class="btn btn-brand  m-btn m-btn--icon m-btn--wide m-btn--md">
					    		<span>
									<i class="la la-check"></i>
									<span>Save</span>
								</span>
                      </button>
                      <button type="button" class="btn btn-brand  dropdown-toggle dropdown-toggle-split m-btn m-btn--md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="la la-plus"></i>  Save &amp; New</a>
                        <a class="dropdown-item" href="#"><i class="la la-copy"></i>  Save &amp; Duplicate</a>
                        <a class="dropdown-item" href="#"><i class="la la-undo"></i> Save &amp; Close</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="la la-close"></i> Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <form class="m-form m-form--label-align-left- m-form--state-" id="m_form">
                  <!--begin: Form Body -->
                  <div class="m-portlet__body">
                    <div class="row">
                      <div class="col-xl-8 offset-xl-2">
                        <div class="m-form__section m-form__section--first">
                          <div class="m-form__heading">
                            <h3 class="m-form__heading-title">Client Details</h3>
                          </div>
                          <div class="form-group m-form__group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">* Name:</label>
                            <div class="col-xl-9 col-lg-9">
                              <input type="text" name="name" class="form-control m-input" placeholder="" value="Nick Stone">
                              <span class="m-form__help">Please enter your first and last names</span>
                            </div>
                          </div>
                          <div class="form-group m-form__group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">* Email:</label>
                            <div class="col-xl-9 col-lg-9">
                              <input type="email" name="email" class="form-control m-input" placeholder="" value="nick.stone@gmail.com">
                              <span class="m-form__help">We'll never share your email with anyone else</span>
                            </div>
                          </div>
                          <div class="form-group m-form__group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">* Phone</label>
                            <div class="col-xl-9 col-lg-9">
                              <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                <input type="text" name="phone" class="form-control m-input" placeholder="" value="1-541-754-3010">
                              </div>
                              <span class="m-form__help">Enter your valid phone in US phone format. E.g: 1-541-754-3010</span>
                            </div>
                          </div>
                        </div>
                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                        <div class="m-form__section">
                          <div class="m-form__heading">
                            <h3 class="m-form__heading-title">
                              Mailing Address
                              <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="Some help text goes here"></i>
                            </h3>
                          </div>
                          <div class="form-group m-form__group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">* Address Line 1:</label>
                            <div class="col-xl-9 col-lg-9">
                              <input type="text" name="address1" class="form-control m-input" placeholder="" value="Headquarters 1120 N Street Sacramento 916-654-5266">
                              <span class="m-form__help">Street address, P.O. box, company name, c/o</span>
                            </div>
                          </div>
                          <div class="form-group m-form__group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Address Line 2:</label>
                            <div class="col-xl-9 col-lg-9">
                              <input type="text" name="address2" class="form-control m-input" placeholder="" value="P.O. Box 942873 Sacramento, CA 94273-0001">
                              <span class="m-form__help">Appartment, suite, unit, building, floor, etc</span>
                            </div>
                          </div>
                          <div class="form-group m-form__group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">* City:</label>
                            <div class="col-xl-9 col-lg-9">
                              <input type="text" name="city" class="form-control m-input" placeholder="" value="Polo Alto">
                            </div>
                          </div>
                          <div class="form-group m-form__group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">* State:</label>
                            <div class="col-xl-9 col-lg-9">
                              <input type="text" name="state" class="form-control m-input" placeholder="" value="California">
                            </div>
                          </div>
                          <div class="form-group m-form__group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">* Country:</label>
                            <div class="col-xl-9 col-lg-9">
                              <select name="country" class="form-control m-input">
                                <option value="">Select</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia, Plurinational State of</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, the Democratic Republic of the</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Côte d'Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curaçao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Réunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin (French part)</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten (Dutch part)</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US" selected="">United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.S.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                        <div class="m-form__section m-form__section--first">
                          <div class="m-form__heading">
                            <h3 class="m-form__heading-title">Account Details</h3>
                          </div>
                          <div class="form-group m-form__group row">
                            <div class="col-lg-12">
                              <label class="form-control-label">* URL:</label>
                              <input type="url" name="account_url" class="form-control m-input" placeholder="" value="http://sinortech.vertoffice.com">
                              <span class="m-form__help">Please enter your preferred URL  to your dashboard</span>
                            </div>
                          </div>
                          <div class="form-group m-form__group row">
                            <div class="col-lg-6 m-form__group-sub">
                              <label class="form-control-label">* Username:</label>
                              <input type="text" name="account_username" class="form-control m-input" placeholder="" value="nick.stone">
                              <span class="m-form__help">Your username to login to your dashboard</span>
                            </div>
                            <div class="col-lg-6 m-form__group-sub">
                              <label class="form-control-label">* Password:</label>
                              <input type="password" name="account_password" class="form-control m-input" placeholder="" value="qwerty">
                              <span class="m-form__help">Please use letters and at least one number and symbol</span>
                            </div>
                          </div>
                        </div>
                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                        <div class="m-form__section">
                          <div class="m-form__heading">
                            <h3 class="m-form__heading-title">Client Settings</h3>
                          </div>
                          <div class="form-group m-form__group row">
                            <div class="col-lg-6 m-form__group-sub">
                              <label class="form-control-label">* User Group:</label>
                              <div class="m-radio-inline">
                                <label class="m-radio m-radio--solid m-radio--brand">
                                  <input type="radio" name="account_group" checked="" value="2"> Sales Person
                                  <span></span>
                                </label>
                                <label class="m-radio m-radio--solid m-radio--brand">
                                  <input type="radio" name="account_group" value="2"> Customer
                                  <span></span>
                                </label>
                              </div>
                              <span class="m-form__help">Please select user group</span>
                            </div>
                            <div class="col-lg-6 m-form__group-sub">
                              <label class="form-control-label">* Communications:</label>
                              <div class="m-checkbox-inline">
                                <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                  <input type="checkbox" name="account_communication[]" checked="" value="email"> Email
                                  <span></span>
                                </label>
                                <label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
                                  <input type="checkbox" name="account_communication[]" value="sms"> SMS
                                  <span></span>
                                </label>
                                <label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
                                  <input type="checkbox" name="account_communication[]" value="phone"> Phone
                                  <span></span>
                                </label>
                              </div>
                              <span class="m-form__help">Please select user communication options</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!--end::Portlet-->
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
</div>
</body>
</html>