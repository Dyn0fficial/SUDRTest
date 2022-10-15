@extends('layouts.auth')

@section('content')

    <!-- SMALL LOGO --> 
		<img class="smalllogoimg" src="Img/SUDRSmallLogoTP.png">
   
            <!-- FORM HANDLER -->
                <form class="formcontainer" method="POST" action="{{ route('register') }}">
                    @csrf


                        <div class="usertype">

                            <h4>Please select a user type:</h4>


                                <input id="facultytab" type="radio" name="usercheck" value="2">
                                <label class="uitab" for="facultytab">Faculty</label>

                                <input id="orgtab" type="radio" name="usercheck" value="1">
                                <label class="uitab" for="orgtab">Organization</label>

                                <input id="studenttab" type="radio" name="usercheck" value="0">
                                <label class="uitab" for="studenttab">Student</label>


                            <section class="faculstud" id="category1">
                                <!-- FIRST NAME -->
                                <div class="reginput">
                                    <i class="fa-solid fa-1"></i>
                                    <input id="Fname" type="text" class="input" name="FirstName" value="{{ old('FirstName') }}" required autocomplete="Fname" 
                                    placeholder = "First Name" autofocus>   
                                </div>
                                    @error('Fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                                <!-- MIDDLE NAME -->
                                <div class="reginput">
                                    <i class="fa-solid fa-1"></i>
                                    <input id="Mname" type="text" class="input" name="MiddleName" value="{{ old('MiddleName') }}" required autocomplete="Mname" 
                                    placeholder = "Middle Name" autofocus>   
                                </div>
                                    @error('Mname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                <!-- LAST NAME -->
                                <div class="reginput">
                                        <i class="fa-solid fa-2"></i>
                                        <input id="Lname" type="text" class="input" name="LastName" value="{{ old('LastName') }}" required autocomplete="Lname" 
                                        placeholder = "Last Name" autofocus>
                                </div>
                                <!--
                                    @error('studid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror-->

                                <!-- COLLEGE -->
                                <div class="reginput">
                                    <i class="fa-solid fa-graduation-cap"></i>

                                    <select class="college style" name="college">
                                        <option value="blank">Select College</option>
                                        <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                                        <option value="College of Business Administration">College of Business Administration</option>
                                        <option value="College of Computer Studies">College of Computer Studies</option>
                                        <option value="College of Education">College of Education</option>
                                        <option value="College of Engineering and Design">College of Engineering and Design</option>
                                        <option value="College of Law">College of Law</option>
                                        <option value="College of Mass Communication">College of Mass Communication</option>
                                        <option value="College of Nursing">College of Nursing</option>
                                        <option value="College of Visual and Performing Arts">College of Visual and Performing Arts</option>
                                        <option value="Divinity School">Divinity School</option>
                                        <option value="Graduate Programs">Graduate Programs</option>
                                        <option value="Institute of Clinical Laboratory Sciences">Institute of Clinical Laboratory Sciences</option>
                                        <option value="Institute of Environmental and Marine Sciences">Institute of Environmental and Marine Sciences</option>
                                        <option value="Institute of Rehabilitative Sciences">Institute of Rehabilitative Sciences</option>
                                        <option value="Institute of Service Learning">Institute of Service Learning</option>
                                        <option value="Medical School">Medical School</option>
                                        <option value="School of Agro-Industrial and Technical Education">School of Agro-Industrial and Technical Education</option>
                                        <option value="School of Basic Education">School of Basic Education</option>
                                        <option value="School of Public Affairs & Governance">School of Public Affairs & Governance</option>
                                    </select> 
                                </div>
                                    @error('college')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </section>    
                        
                            <section class="org" id="category2">
                                <div class="reginput">
                                    <i class="fa-solid fa-school"></i>
                                    <input id="Orgname" type="text" class="input" name="OrganizationName" value="{{ old('OrganizationName') }}"  
                                    placeholder = "Organization Name">   
                                </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </section> 
                        </div>

                        
                        

                        <div class="regrequired">
                            <!-- EMAIL -->
                            <div class="reginput">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder = "Email Address">
                            </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <!-- PASSWORD -->
                            <div class="reginput">
                                    <i class="fa-solid fa-lock"></i>
                                    <input id="password" type="password" class="input" name="password" required autocomplete="new-password"
                                    placeholder = "Password">
                            </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            

                            <!-- CONFIRM PASSWORD -->
                            <div class="reginput">
                                    <i class="fa-solid fa-square-check"></i>
                                    <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password"
                                    placeholder = "Confirm Password">
                            </div>

                        </div>
                  
                    <!-- REGISTER -->
                        <div class="buttoncont">
                            <button class="buttonstyle1">
                                <a href = "{{ route('login') }}">Back</a>
                            </button>

                            <button type="submit" class="buttonstyle1">
                                {{ __('Register') }}
                            </button>
                        </div>
                </form>
@endsection
