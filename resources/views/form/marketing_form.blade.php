<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Multi-Step Form with Progress Bar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .progress-container {
            margin-bottom: 20px;
        }

        .progress-bar {
            height: 5px;
            background-color: #007bff;
            width: 0%;
            transition: width 0.3s;
        }

        .card {
            cursor: pointer;
        }

        .card.selected {
            border: 2px solid #007bff;
        }
    </style>
    <link href="{{ asset('assets/fontend/css/form_style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-4">
        <div class="progress-container">
            <div class="progress-bar" id="progress-bar"></div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="multi-step-form" class="mt-4" method="POST" action="{{ route('marketing_form_store') }}">
            @csrf

             {{-- Step 1 --}}
            <div class="form-step active">
                <p><span class="step-number">1 →</span> Which online marketing platform or service would you require for
                    your campaign:This question is required.*</p>
                <p class="subtext">Choose as many as you like</p>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="card text-center logo-type-selection" data-value="symbol">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_7.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Facebook Page</div>
                            <input type="checkbox" name="logo_type[]" value="symbol_base_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Google My Business</div>
                            <input type="checkbox" name="logo_type[]" value="text_based_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">YouTube Channel</div>
                            <input type="checkbox" name="logo_type[]" value="text_based_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Instagram</div>
                            <input type="checkbox" name="logo_type[]" value="text_based_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">
                                Twitter Profile</div>
                            <input type="checkbox" name="logo_type[]" value="text_based_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Blog</div>
                            <input type="checkbox" name="logo_type[]" value="text_based_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">
                                Google Ads</div>
                            <input type="checkbox" name="logo_type[]" value="text_based_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Facebook Ads</div>
                            <input type="checkbox" name="logo_type[]" value="text_based_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Search Engine Optimization (SEO)</div>
                            <input type="checkbox" name="logo_type[]" value="text_based_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Newsletter</div>
                            <input type="checkbox" name="logo_type[]" value="text_based_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Banners Ads</div>
                            <input type="checkbox" name="logo_type[]" value="text_based_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Other</div>
                            <input type="checkbox" name="logo_type[]" value="text_based_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                </div>
                @error('logo_type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="button" class="next btn btn-primary">Ok</button>
            </div>


           {{-- Step 2  --}}
            <div class="form-step">
                <p><span class="step-number">2 →</span> What is the goal of your online marketing campaign:This
                    question is required.*</p>
                <p class="subtext">i.e. Promote our new website</p>
                <input type="text" id="marketing_goal" class="form-control_custom" name="marketing_goal"
                    placeholder="Type your answer here..." value="{{ old('marketing_goal') }}" />
                @error('marketing_goal')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>

           {{-- step --}}
            <div class="form-step">
                <p><span class="step-number">3 →</span> Describe your company or identity:This question is required.*
                </p>
                <p class="subtext">i.e. Art dealer from Switzerland</p>
                <input type="text" id="company_description" class="form-control_custom"
                    name="company_description" placeholder="Type your answer here..."
                    value="{{ old('company_description') }}" />
                @error('company_description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>






            <!-- Step 4 -->
            <div class="form-step">
                <p>
                    <span class="step-number">4 →</span> How many languages should your
                    website supportThis question is required.*
                </p>
                <p class="subtext">
                    Choose as many as you like
                </p>
                <div class="options_5 row">
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_4[]" value="Yes" />
                            <span>Y</span> Yes
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_4[]" value="No" />
                            <span>N</span> No
                        </label>
                    </div>

                </div>
                @error('source_4')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <p class="subtext">Shift + Enter to make a line break</p>
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>


            <!-- Step 5 -->
            <div class="form-step">
                <p><span class="step-number">5 →</span> Additional Information (Optional):</p>
                <p class="subtext">i.e. Home, About, Service, Gallery, Contact</p>
                <input type="text" id="source_5[]" class="form-control_custom" name="source_5"
                    placeholder="Type your answer here..." value="{{ old('source_5') }}" />
                @error('source_5')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>


            <!-- Step 6 -->
            <div class="form-step">
                <p><span class="step-number">6 →</span> Additional needs (Optional):</p>
                <p class="subtext">Choose as many as you like.</p>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="card text-center additional-need" data-value="hosting">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default.png') }}" alt="Hosting" />
                            </div>
                            <div class="mt-2">Hosting</div>
                            <input type="checkbox" name="additional_needs[]" value="hosting"
                                class="additional-need-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center additional-need" data-value="company_logo">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_1.png') }}" alt="Company Logo" />
                            </div>
                            <div class="mt-2">Company Logo</div>
                            <input type="checkbox" name="additional_needs[]" value="company_logo"
                                class="additional-need-checkbox d-none">
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card text-center additional-need" data-value="newsletter">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_2.png') }}" alt="Newsletter" />
                            </div>
                            <div class="mt-2">Newsletter</div>
                            <input type="checkbox" name="additional_needs[]" value="newsletter"
                                class="additional-need-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center additional-need" data-value="mobile_app">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_3.png') }}" alt="Mobile App" />
                            </div>
                            <div class="mt-2">Mobile App</div>
                            <input type="checkbox" name="additional_needs[]" value="mobile_app"
                                class="additional-need-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center additional-need" data-value="photo_video_production">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_4.png') }}"
                                    alt="Photo & Video Production" />
                            </div>
                            <div class="mt-2">Photo & Video Production</div>
                            <input type="checkbox" name="additional_needs[]" value="photo_video_production"
                                class="additional-need-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center additional-need" data-value="online_marketing">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_5.png') }}"
                                    alt="Online Marketing (SEO, Ads)" />
                            </div>
                            <div class="mt-2">Online Marketing (SEO, Ads)</div>
                            <input type="checkbox" name="additional_needs[]" value="online_marketing"
                                class="additional-need-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center additional-need" data-value="print_material">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_6.png') }}"
                                    alt="Print Material" />
                            </div>
                            <div class="mt-2">Print Material</div>
                            <input type="checkbox" name="additional_needs[]" value="print_material"
                                class="additional-need-checkbox d-none">
                        </div>
                    </div>

                    <!-- Add more options as needed -->
                </div>
                @error('additional_needs')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"><span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>


            <!-- Step 7 -->
            <div class="form-step">
                <p>
                    <span class="step-number">7 →</span> Time frame to complete
                    project:This question is required.*
                </p>
                <p class="subtext">
                    Choose as many as you like
                </p>
                <div class="options_5 row">
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_6[]" value="1-2 Weeks" />
                            <span>A</span> 1-2 Weeks
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_6[]" value="2-3 Weeks" />
                            <span>B</span> 2-3 Weeks
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_6[]" value="4-5 Weeks" />
                            <span>C</span> 4-5 Weeks
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_6[]" value="5-6 Weeks" />
                            <span>D</span> 5-6 Weeks
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_6[]" value="7-8 Weeks" />
                            <span>E</span> 7-8 Weeks
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_6[]" value="10+ Weeks" />
                            <span>F</span> 10+ Weeks
                        </label>
                    </div>
                </div>
                @error('source_6')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <p class="subtext">Shift + Enter to make a line break</p>
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>>




            <!-- Step 8 -->
            <div class="form-step">
                <p>
                    <span class="step-number">8 →</span> What is your budget for this
                    project:This question is required.*
                </p>
                <p class="subtext">
                    How much do you plan to dedicate to this project? If you're unsure,
                    please mention a rough figure.
                </p>
                <div class="options_5 row">
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_7[]" value="5'000-7'000" />
                            <span>A</span> 5'000-7'000
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_7[]" value="7'000-10'000" />
                            <span>B</span> 7'000-10'000
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_7[]" value="10'000-20'000" />
                            <span>C</span> 10'000-20'000
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_7[]" value="20'000-50'000" />
                            <span>D</span> 20'000-50'000
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_7[]" value="100'000+" />
                            <span>E</span> 100'000+
                        </label>
                    </div>

                </div>
                @error('source_7')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <p class="subtext">Shift + Enter to make a line break</p>
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>

            <!-- Step 9 -->
            <div class="form-step">
                <p>
                    <span class="step-number">9 →</span> How did you hear about us? This
                    question is required.*
                </p>
                <p class="subtext">
                    If you heard about us from a friend, please select other and mention
                    your friend's name.
                </p>
                <div class="options_5 row">
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_9[]" value="Google Search" />
                            <span>A</span> Google Search
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_9[]" value="Banner Ad" />
                            <span>B</span> Banner Ad
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_9[]" value="Newsletter" />
                            <span>C</span> Newsletter
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_9[]" value="Other" />
                            <span>D</span> Other
                        </label>
                    </div>
                </div>
                @error('source_9')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <p class="subtext">Shift + Enter to make a line break</p>
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>




            <!-- Step 10 -->
            <div class="form-step">
                <p><span class="step-number">8 →</span> Your contact information*</p>
                <div class="mb-5">
                    <label for="first-name" class="form-label">First name *</label>
                    <input type="text" class="form-control_custom" id="first-name" name="first_name"
                        placeholder="Jane" value="{{ old('first_name') }}" required />
                    <hr />
                </div>
                @error('first_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="last-name" class="form-label">Last name *</label>
                    <input type="text" class="form-control_custom" id="last-name" name="last_name"
                        placeholder="Smith" value="{{ old('last_name') }}" />
                    <hr />
                </div>
                @error('last_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="phone_number" class="form-label">Phone number *</label>
                    <input type="text" class="form-control_custom" id="phone_number" name="phone_number"
                        placeholder="01701005060" value="{{ old('phone_number') }}" />
                    <hr />
                </div>
                @error('phone_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="email" class="form-label">Email *</label>
                    <input type="text" class="form-control_custom" id="email" name="email"
                        placeholder="name@example.com" value="{{ old('email') }}" />
                    <hr />
                </div>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="company" class="form-label">Company</label>
                    <input type="text" class="form-control_custom" id="company" name="company"
                        placeholder="Acme Corporation" value="{{ old('company') }}" />
                    <hr />
                </div>
                @error('company')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            let formStepIndex = 0;
            const formSteps = $('.form-step');
            const progressBar = $('#progress-bar');
            const logoType = $('#logoType');
            const selectedFontInput = $('#selected-font');
            const selectedAdditionalNeedInput = $('#additional-need');

            function updateProgressBar() {
                const progress = ((formStepIndex / (formSteps.length - 1)) * 100) + '%';
                progressBar.css('width', progress);
            }


            ///
            function updateAdditionalNeed() {
                let selectedNeeds = [];
                $('.additional-need-checkbox:checked').each(function() {
                    selectedNeeds.push($(this).val());
                });
                selectedAdditionalNeedInput.val(JSON.stringify(selectedNeeds));
            }

            ///
            function updateSelectedFont() {
                let fontNeeds = [];
                $('.font-selection-checkbox:checked').each(function() {
                    fontNeeds.push($(this).val());
                });
                selectedFontInput.val(JSON.stringify(fontNeeds));
            }




            // Next button click handler
            $('.next').click(function() {
                if (formStepIndex < formSteps.length - 1) {
                    // Handle specific step data capture
                    if (formStepIndex === 0) {
                        const selectedLogoType = $('input[name="logo_type"]:checked').val();
                        logoType.val(selectedLogoType);
                    } else if (formStepIndex === 1) {
                        // Handle font selection data capture
                        const selectedFont = selectedFontInput.val();
                        // You can also handle validations or checks here before proceeding
                    }

                    // Move to next step
                    formSteps.eq(formStepIndex).removeClass('active');
                    formStepIndex++;
                    formSteps.eq(formStepIndex).addClass('active');
                    updateProgressBar();
                }
            });

            // Previous button click handler
            $('.previous').click(function() {
                if (formStepIndex > 0) {
                    formSteps.eq(formStepIndex).removeClass('active');
                    formStepIndex--;
                    formSteps.eq(formStepIndex).addClass('active');
                    updateProgressBar();
                }
            });


            // Logo type selection click handler (for Step 1)
            $('.logo-type-selection').click(function() {
                const checkbox = $(this).find('.logo-type-selection-checkbox');
                checkbox.prop('checked', !checkbox.prop('checked'));
                $(this).toggleClass('selected');
                // updateAdditionalNeed();
            });

            // Additional needs selection click handler (for Step 8)
            $('.additional-need').click(function() {
                const checkbox = $(this).find('.additional-need-checkbox');
                checkbox.prop('checked', !checkbox.prop('checked'));
                $(this).toggleClass('selected');
                updateAdditionalNeed();
            });

            // selected-font selection click handler (for Step 8)
            $('.font-selection').click(function() {
                const checkbox = $(this).find('.font-selection-checkbox');
                checkbox.prop('checked', !checkbox.prop('checked'));
                $(this).toggleClass('selected');
                updateSelectedFont();
            });


            updateProgressBar();
        });
    </script>

    <script src="https://kit.fontawesome.com/14c3ef5dcc.js" crossorigin="anonymous"></script>
</body>

</html>
