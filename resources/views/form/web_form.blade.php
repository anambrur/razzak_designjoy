<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form with Progress Bar</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link href="{{ asset('assets/fontend/css/form_style.css') }}" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="container mt-4">
      <div class="progress-container">
        <div class="progress-bar" id="progress-bar"></div>
      </div>

      <form id="multi-step-form" class="mt-4">
        <div class="form-step">
          <p>
            <span class="step-number">1 →</span> Describe your company or
            identity:*
          </p>
          <p class="subtext">i.e. Art dealer in Switzerland</p>
          <input
            type="text"
            id="description"
            class="form-control_custom"
            name="description"
            placeholder="Type your answer here..."
          />
          <button type="button" class="next btn btn-primary">Ok</button>
        </div>
        <div class="form-step">
          <p>
            <span class="step-number">2 →</span> List the buttons / pages of
            your future website:
          </p>
          <p class="subtext">i.e. Home, About, Service, Gallery, Contact</p>
          <input
            type="text"
            id="pages"
            class="form-control_custom"
            name="pages"
            placeholder="Type your answer here..."
          />
          <button type="button" class="next btn btn-primary">Ok</button>
          <button type="button" class="next btn btn-primary next2">
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <button type="button" class="previous btn btn-secondary">
            <span><i class="fa-solid fa-chevron-up"></i></span>
          </button>
        </div>
        <div class="form-step">
          <p>
            <span class="step-number">3 →</span> Select functionalities of your
            future website:*
          </p>
          <div class="row">
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="audio">
                <input
                  type="checkbox"
                  name="source_3"
                  value="audio"
                  class="d-none"
                />
                <div class="icon">🔊</div>
                <div class="mt-2">Audio</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="video">
                <input
                  type="checkbox"
                  name="source_3"
                  value="video"
                  class="d-none"
                />
                <div class="icon">🎥</div>
                <div class="mt-2">Video</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="picture_gallery">
                <input
                  type="checkbox"
                  name="source_3"
                  value="picture_gallery"
                  class="d-none"
                />
                <div class="icon">🌸</div>
                <div class="mt-2">Picture Gallery</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="animation">
                <input
                  type="checkbox"
                  name="source_3"
                  value="animation"
                  class="d-none"
                />
                <div class="icon">🏃</div>
                <div class="mt-2">Animation</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="blog">
                <input
                  type="checkbox"
                  name="source_3"
                  value="blog"
                  class="d-none"
                />
                <div class="icon">📝</div>
                <div class="mt-2">Blog</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="online_shop">
                <input
                  type="checkbox"
                  name="source_3"
                  value="online_shop"
                  class="d-none"
                />
                <div class="icon">🛒</div>
                <div class="mt-2">Online Shop</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="client_login">
                <input
                  type="checkbox"
                  name="source_3"
                  value="client_login"
                  class="d-none"
                />
                <div class="icon">👤</div>
                <div class="mt-2">Client Login</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="other">
                <input
                  type="checkbox"
                  name="source_3"
                  value="other"
                  class="d-none"
                />
                <div class="icon">✏️</div>
                <div class="mt-2">Other</div>
              </div>
            </div>
          </div>
          <input type="hidden" name="selected_values" id="selected_values" />
          <button type="button" class="next btn btn-primary">Ok</button>
          <button type="button" class="next btn btn-primary next2">
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <button type="button" class="previous btn btn-secondary">
            <span><i class="fa-solid fa-chevron-up"></i></span>
          </button>
        </div>
        <div class="form-step">
          <p>
            <span class="step-number">4 →</span> Make a list of websites you
            like:*
          </p>
          <p class="subtext">i.e. http://www.apple.com, http://www.nike.com</p>
          <input
            id="websites"
            name="websites"
            type="text"
            placeholder="Type your answer here..."
            class="form-control_custom mb-3"
          />
          <p class="subtext">Shift + Enter to make a line break</p>
          <button type="button" class="next btn btn-primary">Ok</button>
          <button type="button" class="next btn btn-primary next2">
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <button type="button" class="previous btn btn-secondary">
            <span><i class="fa-solid fa-chevron-up"></i></span>
          </button>
        </div>
        <div class="form-step">
          <p>
            <span class="step-number">5 →</span> How many languages should your
            website supportThis question is required.*
          </p>
          <p class="subtext">Choose as many as you like</p>
          <div class="options_5 row">
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_5" value="English" />
                <span>A</span> English
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_5" value="German" />
                <span>B</span> German
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_5" value="French" />
                <span>C</span> French
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_5" value="Italian" />
                <span>D</span> Italian
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_5" value="Other" />
                <span>E</span> Other
              </label>
            </div>
          </div>
          <p class="subtext">Shift + Enter to make a line break</p>
          <button type="button" class="next btn btn-primary">Ok</button>
          <button type="button" class="next btn btn-primary next2">
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <button type="button" class="previous btn btn-secondary">
            <span><i class="fa-solid fa-chevron-up"></i></span>
          </button>
        </div>
        <div class="form-step">
          <p>
            <span class="step-number">6 →</span> Time frame to complete
            project:This question is required.*
          </p>
          <div class="options_5 row">
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_6" value="1-2 Weeks" />
                <span>A</span> 1-2 Weeks
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_6" value="2-3 Weeks" />
                <span>B</span> 2-3 Weeks
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_6" value="4-5 Weeks" />
                <span>C</span> 4-5 Weeks
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_6" value="5-6 Weeks" />
                <span>D</span> 5-6 Weeks
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_6" value="7-8 Weeks" />
                <span>E</span> 7-8 Weeks
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_6" value="10+ Weeks" />
                <span>F</span> 10+ Weeks
              </label>
            </div>
          </div>
          <p class="subtext">Shift + Enter to make a line break</p>
          <button type="button" class="next btn btn-primary">Ok</button>
          <button type="button" class="next btn btn-primary next2">
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <button type="button" class="previous btn btn-secondary">
            <span><i class="fa-solid fa-chevron-up"></i></span>
          </button>
        </div>
        <div class="form-step">
          <p>
            <span class="step-number">7 →</span> What is your budget for this
            project:This question is required.*
          </p>
          <p class="subtext">
            How much do you plan to dedicate to this project? If you're unsure,
            please mention a rough figure.
          </p>
          <div class="options_5 row">
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_7" value="5'000-7'000" />
                <span>A</span> 5'000-7'000
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_7" value="7'000-10'000" />
                <span>B</span> 7'000-10'000
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_7" value="10'000-20'000" />
                <span>C</span> 10'000-20'000
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_7" value="20'000-50'000" />
                <span>D</span> 20'000-50'000
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_7" value="100'000+" />
                <span>E</span> 100'000+
              </label>
            </div>
          </div>
          <p class="subtext">Shift + Enter to make a line break</p>
          <button type="button" class="next btn btn-primary">Ok</button>
          <button type="button" class="next btn btn-primary next2">
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <button type="button" class="previous btn btn-secondary">
            <span><i class="fa-solid fa-chevron-up"></i></span>
          </button>
        </div>
        <div class="form-step ">
          <p>
            <span class="step-number">8 →</span> Additional needs (Optional) :
          </p>
          <p class="subtext">Choose as many as you like.</p>
          <div class="row">
            <div class="col-md-3 mb-3 option_6">
              <div class="card text-center" data-value="audio">
                <div class="icon">
                  <img src="./assets/fontend/img/default.png" alt="img" />
                </div>
                <div class="mt-2">Hosting</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="video">
                <div class="icon">
                  <img src="./assets/fontend/img/default (1).png" alt="img" />
                </div>
                <div class="mt-2">Company Logo</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="picture_gallery">
                <div class="icon">
                  <img src="./assets/fontend/img/default (2).png" alt="img" />
                </div>
                <div class="mt-2">Newsletter</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="animation">
                <div class="icon">
                  <img src="./assets/fontend/img/default (3).png" alt="img" />
                </div>
                <div class="mt-2">Mobile App</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="blog">
                <div class="icon">
                  <img src="./assets/fontend/img/default (4).png" alt="img" />
                </div>
                <div class="mt-2">Photo & Video Production</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="online_shop">
                <div class="icon">
                  <img src="./assets/fontend/img/default (5).png" alt="img" />
                </div>
                <div class="mt-2">Online Marketing (SEO, Ads)</div>
              </div>
            </div>
            <div class="col-md-3 mb-3 option_6">
              <div class="card p-3 text-center" data-value="client_login">
                <div class="icon">
                  <img src="./assets/fontend/img/default (6).png" alt="img" />
                </div>
                <div class="mt-2">Print Material</div>
              </div>
            </div>
          </div>
          <p class="subtext">Shift + Enter to make a line break</p>
          <button type="button" class="next btn btn-primary">Ok</button>
          <button type="button" class="next btn btn-primary next2">
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <button type="button" class="previous btn btn-secondary">
            <span><i class="fa-solid fa-chevron-up"></i></span>
          </button>
        </div>

        <!-- <div class="form-step">
          <p>
            <span class="step-number">9 →</span> How did you hear about us?This
            question is required.*
          </p>
          <p class="subtext">
            If you heard about us from a friend, please select other and mention
            your friends name.
          </p>
          <div class="options_5 row">
            <div class="col-md-3 option_5" data-value="Google Search">
              <span>A</span> Google Search
            </div>
            <div class="col-md-3 option_5" data-value="Banner Ad">
              <span>B</span> Banner Ad
            </div>
            <div class="col-md-3 option_5" data-value="Newsletter">
              <span>C</span> Newsletter
            </div>
            <div class="col-md-3 option_5" data-value="Other">
              <span>D</span> Other
            </div>
          </div>
          <p class="subtext">Shift + Enter to make a line break</p>
          <button type="button" class="next btn btn-primary">Ok</button>
          <button type="button" class="next btn btn-primary next2">
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <button type="button" class="previous btn btn-secondary">
            Previous
          </button>
        </div> -->

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
                <input type="checkbox" name="source_9" value="Google Search" />
                <span>A</span> Google Search
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_9" value="Banner Ad" />
                <span>B</span> Banner Ad
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_9" value="Newsletter" />
                <span>C</span> Newsletter
              </label>
            </div>
            <div class="col-md-3 option_5">
              <label class="m-0">
                <input type="checkbox" name="source_9" value="Other" />
                <span>D</span> Other
              </label>
            </div>
          </div>
          <p class="subtext">Shift + Enter to make a line break</p>
          <button
            type="button"
            class="next btn btn-primary"
            onclick="submitForm()"
          >
            Ok
          </button>
          <button type="button" class="next btn btn-primary next2">
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <button type="button" class="previous btn btn-secondary">
            <span><i class="fa-solid fa-chevron-up"></i></span>
          </button>
        </div>

        <div class="form-step">
          <p><span class="step-number">10 →</span> Your contact information*</p>
          <div class="mb-5">
            <label for="first-name" class="form-label">First name *</label>
            <input
              type="text"
              class="form-control_custom"
              id="first-name"
              aria-describedby="emailHelp"
              placeholder="Jane"
            />
            <hr />
          </div>

          <div class="mb-5">
            <label for="last-name" class="form-label">Last name *</label>
            <input
              type="text"
              class="form-control_custom"
              id="last-name"
              aria-describedby="emailHelp"
              placeholder="Smith"
            />
            <hr />
          </div>

          <div class="mb-5">
            <label for="phone_number" class="form-label">Phone number *</label>
            <input
              type="text"
              class="form-control_custom"
              id="phone_number"
              aria-describedby="emailHelp"
              placeholder="01701005060"
            />
            <hr />
          </div>

          <div class="mb-5">
            <label for="email" class="form-label">Email *</label>
            <input
              type="text"
              class="form-control_custom"
              id="email"
              aria-describedby="emailHelp"
              placeholder="name@example.com"
            />
            <hr />
          </div>

          <div class="mb-5">
            <label for="company" class="form-label">Company</label>
            <input
              type="text"
              class="form-control_custom"
              id="company"
              aria-describedby="emailHelp"
              placeholder="Acme Corporation"
            />
            <hr />
          </div>
          <button type="button" class="next btn btn-primary next2">
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <button type="button" class="previous">
            <span><i class="fa-solid fa-chevron-up"></i></span>
          </button>
          <button type="submit" class="next">Submit</button>
        </div>
        <!-- <button type="submit" class="btn btn-primary next">
          <span><i class="fa-solid fa-chevron-down"></i></span>
        </button> -->
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/fontend/js/form_script.js') }}"></script>
    <script
      src="https://kit.fontawesome.com/14c3ef5dcc.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
