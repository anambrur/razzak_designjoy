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
            <input type="hidden" name="logo_type" id="logoType" value="">

            <!-- Step 1 -->
            <div class="form-step active">
                <input type="hidden" id="selected-logo-type" name="logo_type">
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
                        </div>
                    </div>
                    <div class="col-md-5 mb-3">
                        <div class="card text-center logo-type-selection" data-value="text">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_8.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Text Based Logo</div>
                        </div>
                    </div>
                </div>
                <button type="button" class="next btn btn-primary">Ok</button>
            </div>

            <!-- Step 2 -->
            <div class="form-step">
                <input type="hidden" id="selected-font" name="selected_font">
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
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center font-selection" data-value="serif">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_10.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Serif</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center font-selection" data-value="rounded">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_11.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Rounded</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center font-selection" data-value="modern">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_12.png') }}" alt="img" />
                            </div>
                            <div class="mt-2">Modern</div>
                        </div>
                    </div>
                </div>
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
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>

            <!-- Step 6 -->
            <div class="form-step">
                <input type="hidden" id="additional-need" name="additional-need">
                <p><span class="step-number">6 →</span> Additional needs (Optional):</p>
                <p class="subtext">Choose as many as you like.</p>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="card text-center additional-need" data-value="hosting">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default.png') }}" alt="Hosting" />
                            </div>
                            <div class="mt-2">Hosting</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-center additional-need" data-value="company_logo">
                            <div class="icon">
                                <img src="{{ asset('assets/fontend/form_img/default_1.png') }}" alt="Company Logo" />
                            </div>
                            <div class="mt-2">Company Logo</div>
                        </div>
                    </div>
                    <!-- Repeat similar HTML for other options -->
                </div>
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"><span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>




            <!-- Step 7 -->
            {{-- <div class="form-step">
                <p><span class="step-number">7 →</span> How did you hear about us?This question is required.*</p>
                <p class="subtext">If you heard about us from a friend, please select other and mention your friends name.</p>



                <input type="text" id="target_audience" class="form-control_custom" name="target_audience"
                    placeholder="Type your answer here..." />
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div> --}}


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
                            <input type="checkbox" name="source_7" value="Google Search" />
                            <span>A</span> Google Search
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_7" value="Banner Ad" />
                            <span>B</span> Banner Ad
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_7" value="Newsletter" />
                            <span>C</span> Newsletter
                        </label>
                    </div>
                    <div class="col-md-3 option_5">
                        <label class="m-0">
                            <input type="checkbox" name="source_7" value="Other" />
                            <span>D</span> Other
                        </label>
                    </div>
                </div>
                <p class="subtext">Shift + Enter to make a line break</p>
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div>











            <!-- Step 8 -->
            {{-- <div class="form-step">
                <p><span class="step-number">8 →</span> Who are your competitors?</p>
                <p class="subtext">List some of your main competitors and their websites if available.</p>
                <input type="text" id="competitors" class="form-control_custom" name="competitors"
                    placeholder="Type your answer here..." />
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div> --}}

            <!-- Step 9 -->
            {{-- <div class="form-step">
                <p><span class="step-number">9 →</span> Any other information you would like to share?</p>
                <p class="subtext">Feel free to provide any other details that you think might help us understand your
                    requirements better.</p>
                <textarea id="additional_info" class="form-control_custom" name="additional_info"
                    placeholder="Type your answer here..." rows="4"></textarea>
                <button type="button" class="next btn btn-primary">Ok</button>
                <button type="button" class="previous btn btn-secondary"> <span><i
                            class="fa-solid fa-chevron-up"></i></span></button>
            </div> --}}

            <!-- Step 10 -->
            <div class="form-step">
                <p><span class="step-number">8 →</span> Your contact information*</p>
                <div class="mb-5">
                    <label for="first-name" class="form-label">First name *</label>
                    <input type="text" class="form-control_custom" id="first-name" name="first_name"
                        placeholder="Jane" />
                    <hr />
                </div>
                <div class="mb-5">
                    <label for="last-name" class="form-label">Last name *</label>
                    <input type="text" class="form-control_custom" id="last-name" name="last_name"
                        placeholder="Smith" />
                    <hr />
                </div>
                <div class="mb-5">
                    <label for="phone_number" class="form-label">Phone number *</label>
                    <input type="text" class="form-control_custom" id="phone_number" name="phone_number"
                        placeholder="01701005060" />
                    <hr />
                </div>
                <div class="mb-5">
                    <label for="email" class="form-label">Email *</label>
                    <input type="text" class="form-control_custom" id="email" name="email"
                        placeholder="name@example.com" />
                    <hr />
                </div>
                <div class="mb-5">
                    <label for="company" class="form-label">Company</label>
                    <input type="text" class="form-control_custom" id="company" name="company"
                        placeholder="Acme Corporation" />
                    <hr />
                </div>
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
            const selectedAdditionalNeed = $('#additional-need');

            function updateProgressBar() {
                const progress = ((formStepIndex / (formSteps.length - 1)) * 100) + '%';
                progressBar.css('width', progress);
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
                const selectedFont = $(this).data('value');
                selectedFontInput.val(selectedFont);
                $(this).toggleClass('selected');
            });

            // Logo type selection click handler (for Step 1)
            $('.logo-type-selection').click(function() {
                const selectedLogoType = $(this).data('value');
                $('input[name="logo_type"]').val(selectedLogoType);
                $(this).toggleClass('selected');
            });

            // Additional needs selection click handler (for Step 6)
            $('.additional-need').click(function() {
                const selectedAdditional = $(this).data('value');
                selectedAdditionalNeed.val(selectedAdditional);
                $(this).toggleClass('selected');
            });

            updateProgressBar();
        });
    </script>

    <script src="https://kit.fontawesome.com/14c3ef5dcc.js" crossorigin="anonymous"></script>
</body>

</html>
