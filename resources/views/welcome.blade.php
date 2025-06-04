<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>My Contact</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
        <!-- Style -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>
                    :root {
            --primary-color: #4361ee;
            --primary-hover: #3a56d4;
            --text-color: #2b2d42;
            --light-bg: #f8f9fa;
        }
        
        body {
            font-family: 'Inter', 'Noto Sans Khmer', sans-serif;
            color: var(--text-color);
            background-color: #f5f7fa;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            background: white !important;
        }
        
        .navbar-brand {
            font-weight: 600;
            color: var(--primary-color) !important;
            letter-spacing: -0.5px;
        }
        
        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            border-radius: 6px;
            color: var(--text-color);
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--primary-color) !important;
            background-color: rgba(67, 97, 238, 0.1);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
        }
        </style>
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('contacts.index') }}">
                <i class="bi bi-person-lines-fill me-2"></i>
                <span>ContactApp</span>
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler"
                        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Collapse -->
                <div class="collapse navbar-collapse" id="navbar-toggler">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item me-2">
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <!-- content -->
        <div class="py-5 bg-white">
            <div class="px-4 my-5 text-center">
                <h1 class="display-5 fw-bold mt-4">Contact App</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Contact App gives you everything you need to organize your contacts easily.</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-lg me-2">Sign up</a>
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg">Sign in</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <h3>Data Protection</h3>
                    <p>In the event of contact deletion or corruption, keep your contacts secure and unharmed across all of
                        your connected accounts.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <h3>Notes & Tags</h3>
                    <p>Group, search, and filter your contacts using notes and tags.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <h3>Birthday Reminders</h3>
                    <p>Weekly notifications are sent to you, including birthday reminders.</p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
        <section class="bg-white">
            <div class="container py-5">
                <h2 class="text-center my-5">Easy to try. Fair pricing to upgrade.</h2>
                <div class="row">
                    <!-- Free Plan -->
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Free</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="pricing-card-title">$0 <small class="text-muted">/ mo</small></h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>1,000 Contacts</li>
                                    <li>Sync 1 Account</li>
                                    <li>Basic Features</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                            </div>
                        </div>
                    </div>
                    <!-- Pro Plan -->
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Pro</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="pricing-card-title">$9 <small class="text-muted">/ mo</small></h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>25,000 Contacts</li>
                                    <li>Sync 5 Accounts</li>
                                    <li>Pro Features</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                            </div>
                        </div>
                    </div>
                    <!-- Enterprise Plan -->
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Enterprise</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="pricing-card-title">$15 <small class="text-muted">/ mo</small></h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>50,000 Contacts</li>
                                    <li>Sync 7 Accounts</li>
                                    <li>Advanced Features</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <!-- Brand and Copyright -->
                    <div class="col-12 col-md-3 mb-4">
                        <strong>Contact App</strong>
                        <small class="d-block text-muted">© 2024-2025</small>
                    </div>

                    <!-- Features Column -->
                    <div class="col-6 col-md-3 mb-4">
                        <h5>Features</h5>
                        <ul class="list-unstyled text-small">
                            <li><a href="#" class="text-muted">Email Marketing</a></li>
                            <li><a href="#" class="text-muted">Email Template</a></li>
                            <li><a href="#" class="text-muted">Email Broadcast</a></li>
                            <li><a href="#" class="text-muted">Autoresponder Email</a></li>
                            <li><a href="#" class="text-muted">RSS-to-Email</a></li>
                        </ul>
                    </div>

                    <!-- Resources Column -->
                    <div class="col-6 col-md-3 mb-4">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a href="#" class="text-muted">Landing Page Guide</a></li>
                            <li><a href="#" class="text-muted">Inbound Marketing Guide</a></li>
                            <li><a href="#" class="text-muted">Email Marketing Guide</a></li>
                            <li><a href="#" class="text-muted">Helpdesk Guide</a></li>
                        </ul>
                    </div>

                    <!-- About Column -->
                    <div class="col-6 col-md-3 mb-4">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li><a href="#" class="text-muted">Team</a></li>
                            <li><a href="#" class="text-muted">Locations</a></li>
                            <li><a href="#" class="text-muted">Privacy</a></li>
                            <li><a href="#" class="text-muted">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ asset('asset/bootstrap-5.3.3/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>