@extends('layouts.base')
@section('base_content')
<div id="career">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row text-center">
                    <h2 class="title">career</h2> </div>
                <p>Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry.</p>
                <div class="row">
                    <div class="col-xs-12">
                        <form class="form" method="post" action="{{ asset('/career') }}" enctype="multipart/form-data">
                          {{ csrf_field() }}
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_name" class="required">Name <span class="required">*</span></label>
                                <input id="Cv_name" name="name" type="text" class="form-control" maxlength="255" placeholder="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <strong style="color:red">{{ $errors->first('name') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_email" class="required">Email <span class="required">*</span></label>
                                <input id="Cv_email" name="email" type="text" class="form-control" maxlength="255" placeholder="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <strong style="color:red">{{ $errors->first('email') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_mobile" class="required">Mobile <span class="required">*</span></label>
                                <input id="Cv_mobile" name="mobile" type="text" class="form-control" maxlength="255" placeholder="mobile" value="{{ old('mobile') }}">
                                @if ($errors->has('mobile'))
                                    <strong style="color:red">{{ $errors->first('mobile') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_birthdate" class="required">Birthday <span class="required">*</span></label>
                                <input id="Cv_birthdate" name="birthdate" type="text" class="form-control" placeholder="birthday" value="{{ old('birthdate') }}">
                                @if ($errors->has('birthdate'))
                                    <strong style="color:red">{{ $errors->first('birthdate') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_major" class="required">Major <span class="required">*</span></label>
                                <input id="Cv_major" name="major" type="text" class="form-control" maxlength="255" placeholder="major" value="{{ old('major') }}">
                                @if ($errors->has('major'))
                                    <strong style="color:red">{{ $errors->first('major') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_gender" class="required">Gender <span class="required">*</span></label>
                                <select id="Cv_gender" name="gender" class="form-control">
                                    <option value="" selected disabled>Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <strong style="color:red">{{ $errors->first('gender') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_country" class="required">Departement <span class="required">*</span></label>
                                <select id="Cv_country" name="department" class="form-control">
                                    <option value="" selected disabled>Select Departement</option>
                                    <option value="1">sales Departement</option>
                                    <option value="2">Technical Departement</option>
                                    <option value="3">Accounting Departement</option>
                                    <option value="4">Importing Departement</option>
                                    <option value="4">Adminstrative</option>
                                </select>
                                @if ($errors->has('department'))
                                    <strong style="color:red">{{ $errors->first('department') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_nationality" class="required">Nationality <span class="required">*</span></label>
                                <select id="Cv_nationality" name="nationality" class="form-control">
                                    <option value="" selected disabled>Select Nationality</option>
                                    <option value="1">Afghanistan</option>
                                    <option value="2">Albania</option>
                                    <option value="3">Algeria</option>
                                    <option value="4">Andorra</option>
                                    <option value="5">Angola</option>
                                    <option value="6">Antigua and Barbuda</option>
                                    <option value="7">Argentina</option>
                                    <option value="8">Armenia</option>
                                    <option value="9">Australia</option>
                                    <option value="10">Austria</option>
                                    <option value="11">Azerbaijan</option>
                                    <option value="12">Bahamas</option>
                                    <option value="13">Bahrain</option>
                                    <option value="14">Bangladesh</option>
                                    <option value="15">Barbados</option>
                                    <option value="16">Belarus</option>
                                    <option value="17">Belgium</option>
                                    <option value="18">Belize</option>
                                    <option value="19">Benin</option>
                                    <option value="20">Bhutan</option>
                                    <option value="21">Bolivia</option>
                                    <option value="22">Bosnia and Herzegovina</option>
                                    <option value="23">Botswana</option>
                                    <option value="24">Brazil</option>
                                    <option value="25">Brunei Darussalam</option>
                                    <option value="26">Bulgaria</option>
                                    <option value="27">Burkina Faso</option>
                                    <option value="28">Burundi</option>
                                    <option value="29">Cabo Verde</option>
                                    <option value="30">Cambodia</option>
                                    <option value="31">Cameroon</option>
                                    <option value="32">Canada</option>
                                    <option value="33">Central African Republic</option>
                                    <option value="34">Chad</option>
                                    <option value="35">Chile</option>
                                    <option value="36">China</option>
                                    <option value="37">Colombia</option>
                                    <option value="38">Comoros</option>
                                    <option value="39">Congo</option>
                                    <option value="40">Costa Rica</option>
                                    <option value="41">Cote d'Ivoire</option>
                                    <option value="42">Croatia</option>
                                    <option value="43">Cuba</option>
                                    <option value="44">Cyprus</option>
                                    <option value="45">Czech Republic</option>
                                    <option value="46">Democratic People's Republic of Korea (North Korea)</option>
                                    <option value="47">Democratic Republic of the Cong</option>
                                    <option value="48">Denmark</option>
                                    <option value="49">Djibouti</option>
                                    <option value="50">Dominica</option>
                                    <option value="51">Dominican Republic</option>
                                    <option value="52">Ecuador</option>
                                    <option value="53" selected="selected">Egypt</option>
                                    <option value="54">El Salvador</option>
                                    <option value="55">Equatorial Guinea</option>
                                    <option value="56">Eritrea</option>
                                    <option value="57">Estonia</option>
                                    <option value="58">Ethiopia</option>
                                    <option value="59">Fiji</option>
                                    <option value="60">Finland</option>
                                    <option value="61">France</option>
                                    <option value="62">Gabon</option>
                                    <option value="63">Gambia</option>
                                    <option value="64">Georgia</option>
                                    <option value="65">Germany</option>
                                    <option value="66">Ghana</option>
                                    <option value="67">Greece</option>
                                    <option value="68">Grenada</option>
                                    <option value="69">Guatemala</option>
                                    <option value="70">Guinea</option>
                                    <option value="71">Guinea-Bissau</option>
                                    <option value="72">Guyana</option>
                                    <option value="73">Haiti</option>
                                    <option value="74">Honduras</option>
                                    <option value="75">Hungary</option>
                                    <option value="76">Iceland</option>
                                    <option value="77">India</option>
                                    <option value="78">Indonesia</option>
                                    <option value="79">Iran</option>
                                    <option value="80">Iraq</option>
                                    <option value="81">Ireland</option>
                                    <option value="82">Israel</option>
                                    <option value="83">Italy</option>
                                    <option value="84">Jamaica</option>
                                    <option value="85">Japan</option>
                                    <option value="86">Jordan</option>
                                    <option value="87">Kazakhstan</option>
                                    <option value="88">Kenya</option>
                                    <option value="89">Kiribati</option>
                                    <option value="90">Kuwait</option>
                                    <option value="91">Kyrgyzstan</option>
                                    <option value="92">Lao People's Democratic Republic (Laos)</option>
                                    <option value="93">Latvia</option>
                                    <option value="94">Lebanon</option>
                                    <option value="95">Lesotho</option>
                                    <option value="96">Liberia</option>
                                    <option value="97">Libya</option>
                                    <option value="98">Liechtenstein</option>
                                    <option value="99">Lithuania</option>
                                    <option value="100">Luxembourg</option>
                                    <option value="101">Macedonia</option>
                                    <option value="102">Madagascar</option>
                                    <option value="103">Malawi</option>
                                    <option value="104">Malaysia</option>
                                    <option value="105">Maldives</option>
                                    <option value="106">Mali</option>
                                    <option value="107">Malta</option>
                                    <option value="108">Marshall Islands</option>
                                    <option value="109">Mauritania</option>
                                    <option value="110">Mauritius</option>
                                    <option value="111">Mexico</option>
                                    <option value="112">Micronesia (Federated States of)</option>
                                    <option value="113">Monaco</option>
                                    <option value="114">Mongolia</option>
                                    <option value="115">Montenegro</option>
                                    <option value="116">Morocco</option>
                                    <option value="117">Mozambique</option>
                                    <option value="118">Myanmar</option>
                                    <option value="119">Namibia</option>
                                    <option value="120">Nauru</option>
                                    <option value="121">Nepal</option>
                                    <option value="122">Netherlands</option>
                                    <option value="123">New Zealand</option>
                                    <option value="124">Nicaragua</option>
                                    <option value="125">Niger</option>
                                    <option value="126">Nigeria</option>
                                    <option value="127">Norway</option>
                                    <option value="128">Oman</option>
                                    <option value="129">Pakistan</option>
                                    <option value="130">Palau</option>
                                    <option value="131">Panama</option>
                                    <option value="132">Papua New Guinea</option>
                                    <option value="133">Paraguay</option>
                                    <option value="134">Peru</option>
                                    <option value="135">Philippines</option>
                                    <option value="136">Poland</option>
                                    <option value="137">Portugal</option>
                                    <option value="138">Qatar</option>
                                    <option value="139">Republic of Korea (South Korea)</option>
                                    <option value="140">Republic of Moldova</option>
                                    <option value="141">Romania</option>
                                    <option value="142">Russian Federation</option>
                                    <option value="143">Rwanda</option>
                                    <option value="144">Saint Kitts and Nevis</option>
                                    <option value="145">Saint Lucia</option>
                                    <option value="146">Saint Vincent and the Grenadines</option>
                                    <option value="147">Samoa</option>
                                    <option value="148">San Marino</option>
                                    <option value="149">Sao Tome and Principe</option>
                                    <option value="150">Saudi Arabia</option>
                                    <option value="151">Senegal</option>
                                    <option value="152">Serbia</option>
                                    <option value="153">Seychelles</option>
                                    <option value="154">Sierra Leone</option>
                                    <option value="155">Singapore</option>
                                    <option value="156">Slovakia</option>
                                    <option value="157">Slovenia</option>
                                    <option value="158">Solomon Islands</option>
                                    <option value="159">Somalia</option>
                                    <option value="160">South Africa</option>
                                    <option value="161">South Sudan</option>
                                    <option value="162">Spain</option>
                                    <option value="163">Sri Lanka</option>
                                    <option value="164">Sudan</option>
                                    <option value="165">Suriname</option>
                                    <option value="166">Swaziland</option>
                                    <option value="167">Sweden</option>
                                    <option value="168">Switzerland</option>
                                    <option value="169">Syrian Arab Republic</option>
                                    <option value="170">Tajikistan</option>
                                    <option value="171">Thailand</option>
                                    <option value="172">Timor-Leste</option>
                                    <option value="173">Togo</option>
                                    <option value="174">Tonga</option>
                                    <option value="175">Trinidad and Tobago</option>
                                    <option value="176">Tunisia</option>
                                    <option value="177">Turkey</option>
                                    <option value="178">Turkmenistan</option>
                                    <option value="179">Tuvalu</option>
                                    <option value="180">Uganda</option>
                                    <option value="181">Ukraine</option>
                                    <option value="182">United Arab Emirates</option>
                                    <option value="183">United Kingdom of Great Britain and Northern Ireland</option>
                                    <option value="184">United Republic of Tanzania</option>
                                    <option value="185">United States of America</option>
                                    <option value="186">Uruguay</option>
                                    <option value="187">Uzbekistan</option>
                                    <option value="188">Vanuatu</option>
                                    <option value="189">Venezuela</option>
                                    <option value="190">Vietnam</option>
                                    <option value="191">Yemen</option>
                                    <option value="192">Zambia</option>
                                    <option value="193">Zimbabwe</option>
                                </select>
                                @if ($errors->has('nationality'))
                                    <strong style="color:red">{{ $errors->first('nationality') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_university">University</label>
                                <select id="Cv_university" name="university" class="form-control">
                                    <option value="" selected disabled>Select University</option>
                                    <option value="1">10th Ramadan Higher Tech. Inst.</option>
                                    <option value="2">6th of October University</option>
                                    <option value="3">Ahram Candian University (ACU)</option>
                                    <option value="4">Ain Shams University</option>
                                    <option value="5">Akhabr Elyoum</option>
                                    <option value="6">Al Azhar University</option>
                                    <option value="7">Alexandria University</option>
                                    <option value="8">Alsun Higher Institude</option>
                                    <option value="9">American University in Cairo (AUC)</option>
                                    <option value="10">Arab Academy for Science &amp; Tech.</option>
                                    <option value="11">Assiut Academy</option>
                                    <option value="12">Assiut University</option>
                                    <option value="13">Banha Higher Institute of Technology</option>
                                    <option value="14">Banha University</option>
                                    <option value="15">British University in Egypt (BUE)</option>
                                    <option value="16">Cairo Computer Academy</option>
                                    <option value="17">Cairo University</option>
                                    <option value="18">Computer Institude in Abassia</option>
                                    <option value="19">Computer Institute in Hegaz Square</option>
                                    <option value="20">Egyptian Higher Institute</option>
                                    <option value="21">El-Menoufia University</option>
                                    <option value="22">French University (FUC)</option>
                                    <option value="23">German University in Cairo (GUC</option>
                                    <option value="24">Helwan University</option>
                                    <option value="25">High Inst. of Tourism &amp; Hotels</option>
                                    <option value="26">Higher Technological Inst.</option>
                                    <option value="27">Information Tech. Institute</option>
                                    <option value="28">Mansoura University</option>
                                    <option value="29">Menoufiea University</option>
                                    <option value="30">Military Academy</option>
                                    <option value="31">Military Technical College</option>
                                    <option value="32">Minia University</option>
                                    <option value="33">Misr International University</option>
                                    <option value="34">Misr University for Science &amp; Technology (MUST)</option>
                                    <option value="35">Modern Academy in Maadi</option>
                                    <option value="36">MSA. October University MSA،</option>
                                    <option value="37">MTI ( Modern University for Technology &amp; Information)</option>
                                    <option value="38">Sadat Academy</option>
                                    <option value="39">Suez Canal University</option>
                                    <option value="40">Tanta University</option>
                                    <option value="41">Technical Computer Inst.</option>
                                    <option value="0">Other</option>
                                </select>
                                @if ($errors->has('university'))
                                    <strong style="color:red">{{ $errors->first('university') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_faculty">Faculty</label>
                                <select id="Cv_faculty" name="faculty" class="form-control">
                                    <option value="" disabled selected>Select Faculty</option>
                                    <option value="1">Agriculture</option>
                                    <option value="2">Alsun</option>
                                    <option value="3">Applied Arts</option>
                                    <option value="4">Archeology</option>
                                    <option value="5">Arts</option>
                                    <option value="6">Biomedical</option>
                                    <option value="7">Commerce</option>
                                    <option value="8">Computer Science</option>
                                    <option value="9">Dentistry</option>
                                    <option value="10">Economics &amp; Political Science</option>
                                    <option value="11">Engineering</option>
                                    <option value="12">Fine Arts</option>
                                    <option value="13">Hotels &amp; Touris,</option>
                                    <option value="14">Law</option>
                                    <option value="15">Mass Communication</option>
                                    <option value="16">Medicine</option>
                                    <option value="17">Pharmacy</option>
                                    <option value="18">Physical Education</option>
                                    <option value="19">Science</option>
                                    <option value="20">Veterinary Medicine</option>
                                    <option value="0">Other</option>
                                </select>
                                @if ($errors->has('faculty'))
                                    <strong style="color:red">{{ $errors->first('faculty') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_graduation_year" class="required">Graduation Year <span class="required">*</span></label>
                                <select id="Cv_graduation_year" name="graduation_year" class="form-control">
                                    <option value="" disabled selected>Select Graduation Year</option>
                                    <option value="Student">Student</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                </select>
                                @if ($errors->has('graduation_year'))
                                    <strong style="color:red">{{ $errors->first('graduation_year') }}</strong>
                                @endif
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_experience_type">Field of Experience</label>
                                <select id="Cv_experience_type" name="experience_type" class="form-control">
                                    <option value="" disabled selected>Select Type</option>
                                    <option value="0">Fresh Graduate</option>
                                   <option value="1">Experienced</option>
                                </select>
                                @if ($errors->has('experience_type'))
                                    <strong style="color:red">{{ $errors->first('experience_type') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_last_job">Current/Last Function</label>
                                <input id="Cv_last_job" name="last_job" type="text" class="form-control" maxlength="255" placeholder="function" value="{{ old('last_job') }}">
                                @if ($errors->has('last_job'))
                                    <strong style="color:red">{{ $errors->first('last_job') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="Cv_last_company">Current/Last Organization</label>
                                <input id="Cv_last_company" name="last_company" type="text" class="form-control" maxlength="255" placeholder="organization" value="{{ old('last_company') }}">
                                @if ($errors->has('last_company'))
                                    <strong style="color:red">{{ $errors->first('last_company') }}</strong>
                                @endif
                            </div>
                            <div class="col-xs-12">
                                <label for="Cv_cv_file" class="required">CV File <span class="required">*</span></label>
                                <input id="Cv_cv_file" name="file" type="file" class="form-control">
                                @if ($errors->has('file'))
                                    <strong style="color:red">{{ $errors->first('file') }}</strong>
                                @endif
                                <p>Only files with these extensions are allowed: doc,docx,pdf.
Files recomended size less than 500KB.</p>
                            </div>
                            <div class="col-xs-12 text-center">
                                <input type="submit" class="btn btn-default" value="Submit"> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
