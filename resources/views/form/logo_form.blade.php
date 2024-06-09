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

        <form id="multi-step-form" class="mt-4" method="POST" action="{{ route('logo_form_store') }}">
            @csrf

            <input type="hidden" name="form_type" value="logo_form">
            <!-- Step 1 -->
            <div class="form-step active">
                <p><span class="step-number">1 →</span> What are the components you require for the planned logo?</p>
                <p class="subtext">Do you imagine your logo with a symbol? Or do you require a text based logo? Please
                    select below:</p>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <div class="card text-center logo-type-selection" data-value="symbol">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_7.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Symbol Based Logo</div>
                            <input type="checkbox" name="logo_type[]" value="symbol_base_logo"
                                class="logo-type-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-5 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Text Based Logo</div>
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

            <!-- Step 2 -->
            <div class="form-step">
                {{-- <input type="hidden" id="selected-font" name="selected_font"> --}}
                <p><span class="step-number">2 →</span> If you had to choose one of these fonts, which would you choose?
                </p>
                <p class="subtext">Note: We will not actually use the following fonts to create your logo. It's just
                    another great way to identify the design direction.</p>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="card text-center font-selection" data-value="classic">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_9.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Classic</div>
                            <input type="checkbox" name="font_selection[]" value="Classic"
                                class="font-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center font-selection" data-value="serif">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_10.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Serif</div>
                            <input type="checkbox" name="font_selection[]" value="Serif"
                                class="font-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center font-selection" data-value="rounded">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_11.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Rounded</div>
                            <input type="checkbox" name="font_selection[]" value="Rounded"
                                class="font-selection-checkbox d-none">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center font-selection" data-value="modern">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_12.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Modern</div>
                            <input type="checkbox" name="font_selection[]" value="Modern"
                                class="font-selection-checkbox d-none">
                        </div>
                    </div>
                </div>
                @error('font_selection')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>

            <!-- Step 3 -->
            <div class="form-step">
                <p><span class="step-number">3 →</span> List a few logos you like:</p>
                <p class="subtext">i.e. http://www.apple.com, http://www.nike.com</p>
                <input id="websites" name="websites" type="text" placeholder="Type your answer here..."
                    class="form-control_custom mb-3" />
                <p class="subtext">Shift + Enter to make a line break</p>
                @error('websites')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>

            <!-- Step 4 -->
            <div class="form-step">
                <p><span class="step-number">4 →</span> Describe your company or identity:</p>
                <p class="subtext">i.e. Art dealer in Switzerland</p>
                <input type="text" id="company_description" class="form-control_custom"
                    name="company_description" placeholder="Type your answer here..." />
                @error('company_description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>

            <!-- Step 5 -->
            <div class="form-step">
                <p><span class="step-number">5 →</span> Could you share with us some more details?</p>
                <p class="subtext">Goals, budget, deadlines...</p>
                <input type="text" id="details" class="form-control_custom" name="details"
                    placeholder="Type your answer here..." />
                <p class="subtext">Shift + Enter to make a line break</p>
                @error('details')
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
                    <!-- Repeat similar HTML for other options -->
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
                    <span class="step-number">7 →</span> How did you hear about us? This
                    question is required.*
                </p>
                <p class="subtext">
                    If you heard about us from a friend, please select other and mention
                    your friend's name.
                </p>
                <div class="options_5 row">
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_7[]" value="Google Search" />
                            <span>A</span> Google Search
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_7[]" value="Banner Ad" />
                            <span>B</span> Banner Ad
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_7[]" value="Newsletter" />
                            <span>C</span> Newsletter
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_7[]" value="Other" />
                            <span>D</span> Other
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



            <!-- Step 8 -->
            <div class="form-step">
                <p><span class="step-number">8 →</span> Your contact information*</p>
                <div class="mb-5">
                    <label for="first-name" class="form-label">First name *</label>
                    <input type="text" class="form-control_custom" id="first-name" name="first_name"
                        placeholder="Jane" />
                    <hr />
                </div>
                @error('first_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="last-name" class="form-label">Last name *</label>
                    <input type="text" class="form-control_custom" id="last-name" name="last_name"
                        placeholder="Smith" />
                    <hr />
                </div>
                @error('last_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="phone_number" class="form-label">Phone number *</label>
                    <input type="text" class="form-control_custom" id="phone_number" name="phone_number"
                        placeholder="01701005060" />
                    <hr />
                </div>
                @error('phone_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="email" class="form-label">Email *</label>
                    <input type="text" class="form-control_custom" id="email" name="email"
                        placeholder="name@example.com" />
                    <hr />
                </div>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="company" class="form-label">Company</label>
                    <input type="text" class="form-control_custom" id="company" name="company"
                        placeholder="Acme Corporation" />
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
            const selectedLogoTypeSelection = $('#logo-type-selection');

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

            // Font selection click handler (for Step 2)
            $('.font-selection').click(function() {
                const checkbox = $(this).find('.font-selection-checkbox');
                checkbox.prop('checked', !checkbox.prop('checked'));
                $(this).toggleClass('selected');
                // updateSelectedFont();
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

            updateProgressBar();
        });
    </script>

    <script src="https://kit.fontawesome.com/14c3ef5dcc.js" crossorigin="anonymous"></script>
</body>

</html>
