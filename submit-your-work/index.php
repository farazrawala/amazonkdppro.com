<?php
$pageBase = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/') . '/';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo htmlspecialchars($pageBase, ENT_QUOTES, 'UTF-8'); ?>">
    <title>Submit your Work - Amazon KDP Pro</title>
    <!--<link rel="preload" href="css/vendor.min.css" as="style">-->
    <!--<link rel="stylesheet" href="css/vendor.min.css">-->
    <link rel="preload" href="css/vendor.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="css/vendor.min.css">
    </noscript>
    <link rel="icon" href="https://amazonkdppro.com/images/favicon.png">
    <!--<link rel="stylesheet" href="css/popup.css">-->
    <!--<link rel="stylesheet" href="css/custom.css">-->
    <link rel="preload" href="css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="css/custom.css">
    </noscript>
    <link rel="stylesheet" href="css/nothing-01.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <!--<link rel="stylesheet" href="css/all.min.css">-->
    
    <link rel="preload" href="css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="css/all.min.css">
    </noscript>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <!--<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap">-->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    </noscript>
    <style>
        .form-control {
            color: #000 !important;
        }

        /* Social Media Section */
        .social-section {
            text-align: center;
            padding-top: 30px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-icon {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid #000;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .social-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .social-icon:hover::before {
            left: 100%;
        }

        .social-icon:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .social-icon.facebook:hover {
            background: #1877f2;
            border-color: #1877f2;
        }

        .social-icon.instagram:hover {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            border-color: #e6683c;
        }

        .social-icon.linkedin:hover {
            background: #0077b5;
            border-color: #0077b5;
        }

        .social-icon.threads:hover {
            background: #000000;
            border-color: #000000;
        }

        .social-icon i {
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(5px);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            animation: fadeIn 0.3s ease;
        }

        .modal-overlay.active {
            display: flex;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translate(-50%, -60%) scale(0.9);
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        }

        /* File Upload Styles */
        .file-upload-container {
            margin: 20px 0;
        }

        .file-upload-info {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            background: #3395d6;
            border-radius: 11px;
            color: white;
            font-size: 14px;
            font-weight: 500;
        }

        .file-upload-info i {
            font-size: 16px;
            opacity: 0.9;
        }

        .file-upload-wrapper {
            position: relative;
            border: 2px dashed #E5E7EB;
            border-radius: 20px;
            background: #F9FAFB;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .file-upload-wrapper:hover {
            border-color: #3498DB;
            background: #F0F8FF;
        }

        .file-upload-wrapper.dragover {
            border-color: #3498DB;
            background: #EBF5FF;
            transform: scale(1.02);
        }

        .file-input {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
            z-index: 2;
        }

        .file-upload-label {
            display: block !important;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 5px 2px;
            cursor: pointer;
            transition: all 0.3s ease;
            height: auto;
        }

        .file-upload-label i {
            font-size: 32px;
            color: #3498DB;
            margin-top: 4px;
            transition: all 0.3s ease;
        }

        .file-upload-wrapper:hover .file-upload-label i {
            transform: translateY(-2px);
            color: #2E86C1;
        }

        .file-text {
            font-size: 16px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 4px;
        }

        .file-subtext {
            font-size: 12px;
            color: #6B7280;
            font-weight: 400;
        }

        .file-selected {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 20px;
            background: white;
            border-radius: 18px;
            margin: 2px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            animation: slideInFile 0.3s ease;
        }

        @keyframes slideInFile {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .file-selected i {
            font-size: 20px;
            color: #10B981;
        }

        .file-name {
            flex: 1;
            font-size: 14px;
            font-weight: 500;
            color: #374151;
            word-break: break-word;
        }

        .file-remove {
            background: #EF4444;
            color: white;
            border: none;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 999;
        }

        .file-remove:hover {
            background: #DC2626;
            transform: scale(1.1);
        }

        .h-100 {
            height: auto !important;
        }

        /* File upload progress */
        .upload-progress {
            width: 100%;
            height: 4px;
            background: #E5E7EB;
            border-radius: 2px;
            overflow: hidden;
            margin-top: 10px;
        }

        .upload-progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #3498DB, #2E86C1);
            border-radius: 2px;
            transition: width 0.3s ease;
            width: 0%;
        }

        .form-alert {
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .form-alert.success {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #6ee7b7;
        }

        .form-alert.error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fca5a5;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-content {
                padding: 20px 0;
            }

            .contact-form {
                padding: 30px 20px;
            }

            .partner-logos {
                gap: 20px;
            }

            .partner-logo {
                height: 30px;
            }

            .services-background-text {
                font-size: 4rem;
            }

            .services-title {
                font-size: 2rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .service-item {
                padding: 25px 15px;
            }

            .process-title {
                font-size: 2rem;
            }

            .process-timeline {
                padding: 30px 0;
            }

            .timeline-line {
                display: none;
            }

            .process-step {
                flex-direction: column;
                margin-bottom: 40px;
                padding: 0 !important;
            }

            .step-left,
            .step-right {
                justify-content: center;
            }

            .step-content {
                max-width: 100%;
                margin: 20px 0 !important;
                order: 2;
            }

            .step-content::after {
                display: none;
            }

            .step-icon {
                position: relative;
                left: auto;
                transform: none;
                order: 1;
                margin-bottom: 15px;
            }

            .step-number {
                position: relative;
                left: auto;
                right: auto;
                transform: none;
                order: 3;
                margin-top: 0px;
            }

            .step-left .step-number {
                left: 0px;
            }

            .step-right .step-number {
                right: 0px;
            }

            .modal-title {
                font-size: 22px;
            }

            .partner-logos {
                display: none;
            }

            .navbar-collapse {
                text-align: center;
                margin-top: 15px;
            }

            .file-upload-info {
                font-size: 13px;
            }

            .modal-body {
                padding-top: 0px;
            }
        }

        .form-container {
            background: #f1f6ff;
            border-radius: 20px;
            padding: 3rem;
            margin: 2rem auto;
            max-width: 900px;
            position: relative;
            border: 1px solid #3b82f6;
            box-shadow: 2px 3px 17px #999999a1;
        }

        .form-header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .form-title {
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--gradient-bg);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .form-subtitle {
            color: #666;
            font-size: 1.1rem;
            font-weight: 400;
        }

        .form-section {
            margin-bottom: 2.5rem;
        }

        .section-title-form {
            font-size: 2.3rem;
            font-weight: 600;
            color: var(--dark-blue);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding-bottom: 0.5rem;
        }

        .section-icon {
            color: var(--accent-orange);
            font-size: 1.2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 600;
            color: var(--dark-blue);
            margin-bottom: 0.5rem;
            display: block;
            font-size: 0.95rem;
        }

        .required {
            color: var(--danger-red);
        }

        .form-control,
        .form-select {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #fff;
            box-shadow: var(--input-shadow);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(51, 51, 51, 0.25);
            outline: none;
        }

        .form-control:hover,
        .form-select:hover {
            border-color: var(--light-blue);
        }

        .form-control.is-valid {
            border-color: var(--success-green);
        }

        .form-control.is-invalid {
            border-color: var(--danger-red);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .file-upload-area {
            border: 2px dashed #e9ecef;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            background: #f8f9fa;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
        }

        .file-upload-area:hover {
            border-color: var(--primary-blue);
            background: rgba(74, 144, 226, 0.05);
        }

        .file-upload-area.dragover {
            border-color: var(--accent-orange);
            background: rgba(255, 107, 53, 0.05);
        }

        .upload-icon {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 1rem;
        }

        .upload-text {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .upload-subtext {
            color: #999;
            font-size: 0.9rem;
        }

        .file-input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .file-selected {
            background: rgba(74, 144, 226, 0.1);
            border-color: var(--primary-blue);
            color: var(--dark-blue);
        }

        .file-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-top: 1rem;
            padding: 1rem;
            background: rgba(74, 144, 226, 0.05);
            border-radius: 8px;
        }

        .file-name {
            font-weight: 500;
            color: var(--dark-blue);
        }

        .file-size {
            color: #666;
            font-size: 0.9rem;
        }

        .checkbox-container {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .custom-checkbox {
            width: 20px;
            height: 20px;
            border: 2px solid #ddd;
            border-radius: 4px;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
            flex-shrink: 0;
            margin-top: 0.1rem;
        }

        .custom-checkbox:hover {
            border-color: var(--primary-blue);
        }

        .custom-checkbox.checked {
            background: var(--primary-blue);
            border-color: var(--primary-blue);
        }

        .custom-checkbox.checked::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 12px;
            font-weight: bold;
        }

        .checkbox-label {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.4;
            cursor: pointer;
        }

        .checkbox-label a {
            color: var(--primary-blue);
            text-decoration: none;
        }

        .checkbox-label a:hover {
            text-decoration: underline;
        }

        .recaptcha-container {
            margin: 2rem 0;
            display: flex;
            justify-content: center;
        }

        .submit-btn {
            background: var(--gradient-bg);
            border: none;
            color: #000;
            padding: 1rem 3rem;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(74, 144, 226, 0.3);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin: 0 auto;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(74, 144, 226, 0.4);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .progress-bar {
            height: 4px;
            background: #e9ecef;
            border-radius: 2px;
            margin-bottom: 2rem;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: var(--gradient-bg);
            width: 0%;
            transition: width 0.3s ease;
        }

        .form-step {
            opacity: 0.6;
        }

        .form-step.active {
            opacity: 1;
        }

        .error-message {
            color: var(--danger-red);
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: none;
        }

        .success-message {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success-green);
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            border-left: 4px solid var(--success-green);
        }

        .section-title {
            font-size: 3.5rem;
            font-weight: 700;
        }

        .blue-grad {
            background: -webkit-linear-gradient(#319190, #1f5f5e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

        }

        .subm {
            background: url('lp/pub-ban.jpg');
            background-size: cover;
            background-position: center;
            padding: 50px 0px;
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 2rem 1.5rem;
                margin: 1rem;
            }

            .form-title {
                font-size: 2rem;
            }

            .col-md-6 {
                margin-bottom: 1rem;
            }

            .submit-btn {
                width: 100%;
                justify-content: center;
            }

            .section-title {
                font-size: 2.1rem
            }

            .section-title-form {
                font-size: 1.5rem
            }
        }
    </style>
    <!-- Google Tag Manager -->
    
    <!-- End Google Tag Manager -->

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    
    <!-- End Google Tag Manager (noscript) -->
    <!-- Navigation Header -->
    <!-- Navigation Header -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <div class="d-flex align-items-center">
                    <picture>
                        <source srcset="https://amazonkdppro.com/images/logo.png" type="image/webp">
                        <img src="https://amazonkdppro.com/images/logo.png" alt="logo">
                    </picture>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: end;">
                

                <a href="javascript:;" class="submit-work-btn consultBtn" style="background: #ff9900;">
                    Submit Your Work <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </nav>

    <section class="ser-bnr">
        <div class="container d-flex align-items-center ser-container" style="border: 1.5px solid #ff9900;">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title blue-grad ser-bnr-head" style="margin-bottom:15px; background: -webkit-linear-gradient(#ff9900, #ff9900); -webkit-background-clip: text !important;">Submit Your Work</h1>
                    <p>At Amazon KDP Pro, we welcome manuscript submissions across all genres from authors around
                        the world. Whether you're a first-time writer or an experienced author, we’re eager to hear from
                        you. There is no need for agent representation when submitting to us — we value direct
                        communication with all writers, represented or not</p>
                    <p>We encourage all prospective authors to explore our About Us page or get in touch with our team
                        for more information. We look forward to discovering exciting new voices and receiving your
                        manuscript!</p>
                </div>
                <div class="col-lg-5"></div>
            </div>
        </div>
        <img src="home/bnr-Light-left.png" class="top-bnr-left-img" alt="">
        <img src="home/bnr-Light-right.png" class="top-bnr-right-img" alt="">
    </section>

    <section class="subm-sec-2">
        <div class="container">
            <div class="row" style="align-items:center">
                <div class="col-lg-6">
                    <img src="images/sumb-sec-2.webp" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <h2 class="blue-grad section-title mb-4" style="background: -webkit-linear-gradient(#ff9900, #ff9900); -webkit-background-clip: text !important;">What to Include in Your Submission</h2>

                    <h4 class="blue-grad fw-bold" style="background: -webkit-linear-gradient(#000000, #000000); -webkit-background-clip: text !important;">Covering Letter</h4>
                    <p>Please include the following in your covering letter:</p>
                    <ul>
                        <li>Your full name (and pseudonym, if applicable)</li>
                        <li>Your postal address, telephone number, and email address</li>
                        <li>A brief summary of any previous writing experience</li>
                        <li>The estimated word count of your completed manuscript</li>
                    </ul>

                    <h4 class="blue-grad mt-4 fw-bold" style="background: -webkit-linear-gradient(#000000, #000000); -webkit-background-clip: text !important;">Overview of Your Book</h4>
                    <p>Provide a synopsis — a concise overview of your book. While the length may vary depending on the
                        genre or subject, we recommend keeping it under 500 words.</p>
                    <p>Be sure to include the complete manuscript with your submission.</p>

                    <h4 class="blue-grad mt-4 fw-bold" style="background: -webkit-linear-gradient(#000000, #000000); -webkit-background-clip: text !important;">Submit Your Work</h4>
                    <p>You can submit your manuscript in one of the following ways:</p>
                    <ul>
                        <li>Upload it through our online submission portal</li>
                        <li>Email it directly to us</li>
                        <li>Or send a printed copy via post, following the submission instructions on our website</li>
                    </ul>
                    <h4 class="blue-grad" style="background: -webkit-linear-gradient(#000000, #000000); -webkit-background-clip: text !important;"><b>We look forward to reviewing your work at Amazon KDP Pro and
                            discovering your voice.</b></h4>
                </div>
            </div>
        </div>
    </section>


    <section id="onlineform">
        <div class="container">
            <div class="form-container" style="background: #ff99001a; border: 1px solid #ff9900;">
                <div class="form-header">
                    <h2 class="section-title blue-grad" style="background: -webkit-linear-gradient(#ff9900, #ff9900); -webkit-background-clip: text !important;">Online Submission Form</h2>
                    <p class="form-subtitle">Submit your manuscript for professional review and publishing consideration
                    </p>
                </div>

                <div id="formAlert" class="form-alert" style="display:none;" role="alert"></div>

                <form class="form_submission" id="manuscriptSubmissionForm" method="POST" action="submit.php" enctype="multipart/form-data">
                    <!-- Personal Information Section -->
                    <div class="form-section">
                        <h3 class="section-title-form">
                            <i class="fas fa-user section-icon"></i>
                            Personal Information
                        </h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Title</label>
                                    <select class="form-select" name="title" required="">
                                        <option value="">- Select -</option>
                                        <option value="mr">Mr.</option>
                                        <option value="mrs">Mrs.</option>
                                        <option value="ms">Ms.</option>
                                        <option value="dr">Dr.</option>
                                        <option value="prof">Prof.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="firstName" required="">
                                    <div class="error-message">Please enter your first name</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="lastName" required="">
                                    <div class="error-message">Please enter your last name</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Contact Number <span class="required">*</span></label>
                                    <input type="tel" class="form-control" name="contactNumber"
                                        onkeyup="this.value = this.value.replace(/[^0-9-]/g, '');" required="">
                                    <div class="error-message">Please enter a valid contact number</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email <span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" required="">
                                    <div class="error-message">Please enter a valid email address</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Confirm Email <span class="required">*</span></label>
                                    <input type="email" class="form-control" name="confirmEmail" required="">
                                    <div class="error-message">Emails do not match</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Address Information Section -->
                    <div class="form-section">
                        <h3 class="section-title-form">
                            <i class="fas fa-map-marker-alt section-icon"></i>
                            Address Information
                        </h3>
                        <div class="form-group">
                            <label class="form-label">Street Address</label>
                            <input type="text" class="form-control" name="street">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Town/City</label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">County/State</label>
                                    <input type="text" class="form-control" name="state">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Postcode/Zipcode</label>
                                    <input type="text" class="form-control" name="postcode">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Country <span class="required">*</span></label>
                            <select name="country" class="form-select">
                                <option value="">Select Country</option>
                                <option value="af">Afghanistan</option>
                                <option value="al">Albania</option>
                                <option value="dz">Algeria</option>
                                <option value="as">American Samoa</option>
                                <option value="ad">Andorra</option>
                                <option value="ao">Angola</option>
                                <option value="ai">Anguilla</option>
                                <option value="aq">Antarctica</option>
                                <option value="ag">Antigua and Barbuda</option>
                                <option value="ar">Argentina</option>
                                <option value="am">Armenia</option>
                                <option value="aw">Aruba</option>
                                <option value="au">Australia</option>
                                <option value="at">Austria</option>
                                <option value="az">Azerbaijan</option>
                                <option value="bs">Bahamas</option>
                                <option value="bh">Bahrain</option>
                                <option value="bd">Bangladesh</option>
                                <option value="bb">Barbados</option>
                                <option value="by">Belarus</option>
                                <option value="be">Belgium</option>
                                <option value="bz">Belize</option>
                                <option value="bj">Benin</option>
                                <option value="bm">Bermuda</option>
                                <option value="bt">Bhutan</option>
                                <option value="bo">Bolivia</option>
                                <option value="bq">Bonaire, Sint Eustatius and Saba</option>
                                <option value="ba">Bosnia and Herzegovina</option>
                                <option value="bw">Botswana</option>
                                <option value="bv">Bouvet Island</option>
                                <option value="br">Brazil</option>
                                <option value="io">British Indian Ocean Territory</option>
                                <option value="bn">Brunei Darussalam</option>
                                <option value="bg">Bulgaria</option>
                                <option value="bf">Burkina Faso</option>
                                <option value="bi">Burundi</option>
                                <option value="cv">Cabo Verde</option>
                                <option value="kh">Cambodia</option>
                                <option value="cm">Cameroon</option>
                                <option value="ca">Canada</option>
                                <option value="ky">Cayman Islands</option>
                                <option value="cf">Central African Republic</option>
                                <option value="td">Chad</option>
                                <option value="cl">Chile</option>
                                <option value="cn">China</option>
                                <option value="cx">Christmas Island</option>
                                <option value="cc">Cocos (Keeling) Islands</option>
                                <option value="co">Colombia</option>
                                <option value="km">Comoros</option>
                                <option value="cg">Congo</option>
                                <option value="cd">Congo, Democratic Republic of the</option>
                                <option value="ck">Cook Islands</option>
                                <option value="cr">Costa Rica</option>
                                <option value="ci">Côte d'Ivoire</option>
                                <option value="hr">Croatia</option>
                                <option value="cu">Cuba</option>
                                <option value="cw">Curaçao</option>
                                <option value="cy">Cyprus</option>
                                <option value="cz">Czech Republic</option>
                                <option value="dk">Denmark</option>
                                <option value="dj">Djibouti</option>
                                <option value="dm">Dominica</option>
                                <option value="do">Dominican Republic</option>
                                <option value="ec">Ecuador</option>
                                <option value="eg">Egypt</option>
                                <option value="sv">El Salvador</option>
                                <option value="gq">Equatorial Guinea</option>
                                <option value="er">Eritrea</option>
                                <option value="ee">Estonia</option>
                                <option value="sz">Eswatini</option>
                                <option value="et">Ethiopia</option>
                                <option value="fk">Falkland Islands (Malvinas)</option>
                                <option value="fo">Faroe Islands</option>
                                <option value="fj">Fiji</option>
                                <option value="fi">Finland</option>
                                <option value="fr">France</option>
                                <option value="gf">French Guiana</option>
                                <option value="pf">French Polynesia</option>
                                <option value="tf">French Southern Territories</option>
                                <option value="ga">Gabon</option>
                                <option value="gm">Gambia</option>
                                <option value="ge">Georgia</option>
                                <option value="de">Germany</option>
                                <option value="gh">Ghana</option>
                                <option value="gi">Gibraltar</option>
                                <option value="gr">Greece</option>
                                <option value="gl">Greenland</option>
                                <option value="gd">Grenada</option>
                                <option value="gp">Guadeloupe</option>
                                <option value="gu">Guam</option>
                                <option value="gt">Guatemala</option>
                                <option value="gg">Guernsey</option>
                                <option value="gn">Guinea</option>
                                <option value="gw">Guinea-Bissau</option>
                                <option value="gy">Guyana</option>
                                <option value="ht">Haiti</option>
                                <option value="hm">Heard Island and McDonald Islands</option>
                                <option value="va">Holy See</option>
                                <option value="hn">Honduras</option>
                                <option value="hk">Hong Kong</option>
                                <option value="hu">Hungary</option>
                                <option value="is">Iceland</option>
                                <option value="in">India</option>
                                <option value="id">Indonesia</option>
                                <option value="ir">Iran</option>
                                <option value="iq">Iraq</option>
                                <option value="ie">Ireland</option>
                                <option value="im">Isle of Man</option>
                                <option value="il">Israel</option>
                                <option value="it">Italy</option>
                                <option value="jm">Jamaica</option>
                                <option value="jp">Japan</option>
                                <option value="je">Jersey</option>
                                <option value="jo">Jordan</option>
                                <option value="kz">Kazakhstan</option>
                                <option value="ke">Kenya</option>
                                <option value="ki">Kiribati</option>
                                <option value="kp">Korea, Democratic People's Republic of</option>
                                <option value="kr">Korea, Republic of</option>
                                <option value="kw">Kuwait</option>
                                <option value="kg">Kyrgyzstan</option>
                                <option value="la">Lao People's Democratic Republic</option>
                                <option value="lv">Latvia</option>
                                <option value="lb">Lebanon</option>
                                <option value="ls">Lesotho</option>
                                <option value="lr">Liberia</option>
                                <option value="ly">Libya</option>
                                <option value="li">Liechtenstein</option>
                                <option value="lt">Lithuania</option>
                                <option value="lu">Luxembourg</option>
                                <option value="mo">Macao</option>
                                <option value="mg">Madagascar</option>
                                <option value="mw">Malawi</option>
                                <option value="my">Malaysia</option>
                                <option value="mv">Maldives</option>
                                <option value="ml">Mali</option>
                                <option value="mt">Malta</option>
                                <option value="mh">Marshall Islands</option>
                                <option value="mq">Martinique</option>
                                <option value="mr">Mauritania</option>
                                <option value="mu">Mauritius</option>
                                <option value="yt">Mayotte</option>
                                <option value="mx">Mexico</option>
                                <option value="fm">Micronesia</option>
                                <option value="md">Moldova</option>
                                <option value="mc">Monaco</option>
                                <option value="mn">Mongolia</option>
                                <option value="me">Montenegro</option>
                                <option value="ms">Montserrat</option>
                                <option value="ma">Morocco</option>
                                <option value="mz">Mozambique</option>
                                <option value="mm">Myanmar</option>
                                <option value="na">Namibia</option>
                                <option value="nr">Nauru</option>
                                <option value="np">Nepal</option>
                                <option value="nl">Netherlands</option>
                                <option value="nc">New Caledonia</option>
                                <option value="nz">New Zealand</option>
                                <option value="ni">Nicaragua</option>
                                <option value="ne">Niger</option>
                                <option value="ng">Nigeria</option>
                                <option value="nu">Niue</option>
                                <option value="nf">Norfolk Island</option>
                                <option value="mp">Northern Mariana Islands</option>
                                <option value="no">Norway</option>
                                <option value="om">Oman</option>
                                <option value="pk">Pakistan</option>
                                <option value="pw">Palau</option>
                                <option value="ps">Palestine</option>
                                <option value="pa">Panama</option>
                                <option value="pg">Papua New Guinea</option>
                                <option value="py">Paraguay</option>
                                <option value="pe">Peru</option>
                                <option value="ph">Philippines</option>
                                <option value="pn">Pitcairn</option>
                                <option value="pl">Poland</option>
                                <option value="pt">Portugal</option>
                                <option value="pr">Puerto Rico</option>
                                <option value="qa">Qatar</option>
                                <option value="re">Réunion</option>
                                <option value="ro">Romania</option>
                                <option value="ru">Russian Federation</option>
                                <option value="rw">Rwanda</option>
                                <option value="bl">Saint Barthélemy</option>
                                <option value="sh">Saint Helena</option>
                                <option value="kn">Saint Kitts and Nevis</option>
                                <option value="lc">Saint Lucia</option>
                                <option value="mf">Saint Martin</option>
                                <option value="pm">Saint Pierre and Miquelon</option>
                                <option value="vc">Saint Vincent and the Grenadines</option>
                                <option value="ws">Samoa</option>
                                <option value="sm">San Marino</option>
                                <option value="st">Sao Tome and Principe</option>
                                <option value="sa">Saudi Arabia</option>
                                <option value="sn">Senegal</option>
                                <option value="rs">Serbia</option>
                                <option value="sc">Seychelles</option>
                                <option value="sl">Sierra Leone</option>
                                <option value="sg">Singapore</option>
                                <option value="sx">Sint Maarten</option>
                                <option value="sk">Slovakia</option>
                                <option value="si">Slovenia</option>
                                <option value="sb">Solomon Islands</option>
                                <option value="so">Somalia</option>
                                <option value="za">South Africa</option>
                                <option value="gs">South Georgia and South Sandwich Islands</option>
                                <option value="ss">South Sudan</option>
                                <option value="es">Spain</option>
                                <option value="lk">Sri Lanka</option>
                                <option value="sd">Sudan</option>
                                <option value="sr">Suriname</option>
                                <option value="sj">Svalbard and Jan Mayen</option>
                                <option value="se">Sweden</option>
                                <option value="ch">Switzerland</option>
                                <option value="sy">Syrian Arab Republic</option>
                                <option value="tw">Taiwan</option>
                                <option value="tj">Tajikistan</option>
                                <option value="tz">Tanzania</option>
                                <option value="th">Thailand</option>
                                <option value="tl">Timor-Leste</option>
                                <option value="tg">Togo</option>
                                <option value="tk">Tokelau</option>
                                <option value="to">Tonga</option>
                                <option value="tt">Trinidad and Tobago</option>
                                <option value="tn">Tunisia</option>
                                <option value="tr">Turkey</option>
                                <option value="tm">Turkmenistan</option>
                                <option value="tc">Turks and Caicos Islands</option>
                                <option value="tv">Tuvalu</option>
                                <option value="ug">Uganda</option>
                                <option value="ua">Ukraine</option>
                                <option value="ae">United Arab Emirates</option>
                                <option value="uk">United Kingdom</option>
                                <option value="us">United States</option>
                                <option value="um">United States Minor Outlying Islands</option>
                                <option value="uy">Uruguay</option>
                                <option value="uz">Uzbekistan</option>
                                <option value="vu">Vanuatu</option>
                                <option value="ve">Venezuela</option>
                                <option value="vn">Viet Nam</option>
                                <option value="vg">Virgin Islands (British)</option>
                                <option value="vi">Virgin Islands (U.S.)</option>
                                <option value="wf">Wallis and Futuna</option>
                                <option value="eh">Western Sahara</option>
                                <option value="ye">Yemen</option>
                                <option value="zm">Zambia</option>
                                <option value="zw">Zimbabwe</option>
                            </select>
                            <div class="error-message">Please select your country</div>
                        </div>
                    </div>

                    <!-- Book Information Section -->
                    <div class="form-section">
                        <h3 class="section-title-form">
                            <i class="fas fa-book section-icon"></i>
                            Book Information
                        </h3>
                        <div class="form-group">
                            <label class="form-label">Book Title <span class="required">*</span></label>
                            <input type="text" class="form-control" name="bookTitle" required="">
                            <div class="error-message">Please enter your book title</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Genre <span class="required">*</span></label>
                            <select class="form-select" name="genre" required="">
                                <option value="">Select Genre</option>
                                <option value="fiction">Fiction</option>
                                <option value="non-fiction">Non-Fiction</option>
                                <option value="biography">Biography</option>
                                <option value="children">Children's Book</option>
                                <option value="poetry">Poetry</option>
                                <option value="academic">Academic</option>
                                <option value="business">Business</option>
                                <option value="self-help">Self-Help</option>
                                <option value="other">Other</option>
                            </select>
                            <div class="error-message">Please select a genre</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Synopsis <span class="required">*</span></label>
                                    <textarea class="form-control" name="synopsis" rows="6"
                                        placeholder="Provide a brief overview of your book (max 500 words)"
                                        required=""></textarea>
                                    <div class="error-message">Please provide a synopsis</div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Author Information</label>
                                    <textarea class="form-control" name="authorInfo" rows="6"
                                        placeholder="Tell us about your writing experience, previous publications, and any relevant background"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- File Upload Section -->
                    <div class="form-section">
                        <h3 class="section-title-form">
                            <i class="fas fa-upload section-icon"></i>
                            Manuscript Upload
                        </h3>
                        <div class="file-upload-wrapper">
                            <input type="file" name="manuscript" class="file-input" accept=".pdf,.doc,.docx,.txt" required>
                            <label class="file-upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span class="file-text">Choose File</span>
                                <span class="file-subtext">PDF, DOC, DOCX, TXT (Max 10MB)</span>
                            </label>
                            <div class="file-selected" style="display: none;">
                                <i class="fas fa-file-alt"></i>
                                <span class="file-name"></span>
                                <button type="button" class="file-remove">×</button>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="submit-btn yellow-btn-themee" name="submit" value="Submit">
                            <i class="fas fa-paper-plane"></i>
                            Submit Work!
                        </button>
                    </div>
                </form>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-lg-6">
                    <div class="more-subm" style="border: solid 1px #ff9900;">
                        <h3 style="color:#000000" class="fw-bold">Send An Email</h3>
                        <p style="color:#000000">Send your manuscript as an email attachment with the subject line: New
                            Submission.</p>
                        <p style="color:#000000">Accepted file formats: <span class="b-sp">txt</span> <span
                                class="b-sp">rtf</span> <span class="b-sp">pdf</span> <span class="b-sp">doc</span>
                            <span class="b-sp">docx</span> <span class="b-sp">odt</span></p>
                        <p style="color:#000000">Email: <a style="text-decoration:none;color:#014E98"
                                href="mailto:info@amazonkdppro.com"><span
                                    class=""
                                    >info@amazonkdppro.com</span></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="more-subm" style="border: solid 1px #ff9900;">
                        <h3 style="color:#000000" class="fw-bold">By Post</h3>
                        <p style="color:#000000">Please address your submission to:</p>
                        <p style="color:#000000"><b>SUBMISSIONS DEPARTMENT</b> Amazon KDP Pro</p>
                        <p style="color:#000000">If you would like your manuscript returned, kindly include a stamped
                            addressed envelope or ensure sufficient postage is provided.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <div class="container mb-3">
        <footer class="cambridge-footer" style="background: #ff99001a !important;">
            <div class="container">
                <!-- Logo Section -->
                <div class="logo-section">
                    <picture>
                        <source srcset="https://amazonkdppro.com/images/logo.png" type="image/webp">
                        <img style="max-width: 300px;" src="https://amazonkdppro.com/images/logo.png" alt="" data-aos="fade-up"
                            data-aos-delay="200" loading="lazy">
                    </picture>
                </div>

                <!-- Social Media Icons -->
                <div class="social-section" data-aos="fade-up" data-aos-delay="400">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/authorssolution.co.uk/" target="_blank"
                            class="social-icon facebook" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/authorssolutioncouk" target="_blank"
                            class="social-icon instagram" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/authorsolution-co-uk" target="_blank"
                            class="social-icon linkedin" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                        <a href="https://x.com/AuthorsSolution" target="_blank" class="social-icon x"
                            aria-label="Threads">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://www.youtube.com/@authorssolutionsuk?si=uvuZWINgl3uWOVoQ" target="_blank"
                            class="social-icon youtube" aria-label="Threads">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="https://www.pinterest.com/authorssolutioncouk/" target="_blank"
                            class="social-icon pinterest" aria-label="Threads">
                            <i class="fa-brands fa-pinterest"></i>
                        </a>

                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="container">
        <div class="row text-center" style="padding:5px 20px">
            <h2 style="color:#000000">Disclaimer</h2>
            <p style="color: #000;font-size: 13px;line-height: 1.2;">The information on amazonkdppro.com is provided
                for general informational purposes only. While we strive to keep the content accurate and up to date, we
                make no guarantees regarding its completeness or reliability. BooksPublisher is not responsible for any
                decisions or outcomes based on the information on this website. For specific assistance, please contact
                our team directly.</p>

        </div>
    </div>

    <div class="foot-slip" style="background: #ff9900; padding: 10px 0;">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center; color: #fff;">
            <div>
                <b>Ⓒ All Rights Reserved 2026 - Amazon KDP Pro</b>
            </div>
            <div>
                <a href="https://amazonkdppro.com/privacy.php"
                    style="color: #fff; margin-right: 3px; text-decoration: none;">Privacy
                    Policy</a>
                <span style="color: #fff; padding: 0 5px;">|</span>
                <a href="https://amazonkdppro.com/terms.php"
                    style="color: #fff; text-decoration: none;">Terms & Conditions</a>
            </div>
        </div>
    </div>

    <!-- Floating Contact Button -->
    <div class="floating-contact consultBtn" style="background: #ff9900;">
        <i class="fas fa-phone"></i> Get A Quote
    </div>

    <!-- Modal Overlay -->
    <div class="modal-overlay" id="modalOverlay">
        <div class="modal">
            <div class="modal-header">
                <button class="modal-close" id="modalClose" style="background: #ff9900;">
                    <i class="fas fa-times"></i>
                </button>
                <img src="lp/logo-blue.png" alt="" loading="lazy">
                <h2 class="modal-title blue-grad" style="background: -webkit-linear-gradient(#ff9900, #ff9900); -webkit-background-clip: text !important;">Activate Upto 50% OFF Discount Coupon!</h2>
                <p>Last 6 Coupons Left</p>
            </div>

            <div class="modal-body" id="modalBody">
                <div id="consultationAlert" class="form-alert" style="display:none;" role="alert"></div>
                <form class="form-submission" id="consultationForm" method="POST" action="submit-consultation.php">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Full name" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email address" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <input type="tel" placeholder="Phone number" name="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" name="brief" placeholder="Enter about your book" class="form-control">
                    </div>

                    <button type="submit" class="submit-btn" name="submit" value="Submit" style="background: #ff9900;">
                        Schedule Expert Consultation
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <!--<script data-cfasync="false" src="js/email-decode.min.js"></script>-->
    <script src="js/jquery.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <?php include '../include/chat-code-script.php'; ?>
    
    <script>
    window.addEventListener('load', function() {
        setTimeout(function() {
            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = 'css/popup.css';
            document.head.appendChild(link);
        }, 5000);
    });
    </script>

    <!-- Bootstrap Bundle -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Slick Carousel JS -->
    <script src="js/slick.min.js"></script>

    <!-- AOS JS -->
    <script src="js/aos.js"></script>

    <!-- GLightbox -->
    <script src="js/glightbox.min.js"></script>

    <script src="js/script-1.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        function getFormEndpoint(filename) {
            var path = window.location.pathname;
            var base = path.substring(0, path.lastIndexOf('/') + 1);
            return base + filename;
        }

        function parseFormResponse(response) {
            return response.text().then(function (text) {
                var trimmed = (text || '').trim();
                if (!trimmed) {
                    throw new Error('Empty server response (HTTP ' + response.status + '). Check that submit-consultation.php exists on the server and vendor/PHPMailer is uploaded.');
                }
                try {
                    return { ok: response.ok, data: JSON.parse(trimmed) };
                } catch (parseError) {
                    throw new Error('HTTP ' + response.status + ': ' + trimmed.substring(0, 500));
                }
            });
        }

        function redirectToThankYou(formElement, serverParams) {
            var thankYouUrl = 'https://amazonkdppro.com/thankyou.php';
            var params = new URLSearchParams();
            var formData = new FormData(formElement);

            formData.forEach(function (value, key) {
                if (key === 'submit') {
                    return;
                }
                if (value instanceof File) {
                    if (value.name) {
                        params.set(key, value.name);
                    }
                    return;
                }
                if (value !== null && value !== undefined && String(value).trim() !== '') {
                    params.set(key, value);
                }
            });

            if (serverParams) {
                Object.keys(serverParams).forEach(function (key) {
                    if (serverParams[key] !== null && serverParams[key] !== undefined && String(serverParams[key]).trim() !== '') {
                        params.set(key, serverParams[key]);
                    }
                });
            }

            var email = params.get('email') || params.get('e');
            if (email) {
                params.set('e', email);
            }

            var fullName = params.get('name');
            if (!fullName && params.get('firstName')) {
                fullName = (params.get('firstName') + ' ' + (params.get('lastName') || '')).trim();
                params.set('name', fullName);
            }

            window.location.href = thankYouUrl + '?' + params.toString();
        }

        $(document).ready(function () {
            // Initialize Slick Carousel immediately
            $('.books-carousel').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 7,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 3000,
                pauseOnHover: true,
                arrows: false,
                pauseOnFocus: true,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            AOS.refresh();

            const manuscriptForm = document.getElementById('manuscriptSubmissionForm');
            const formAlert = document.getElementById('formAlert');

            if (manuscriptForm) {
                manuscriptForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    const email = manuscriptForm.querySelector('[name="email"]').value.trim();
                    const confirmEmail = manuscriptForm.querySelector('[name="confirmEmail"]').value.trim();

                    if (email !== confirmEmail) {
                        formAlert.className = 'form-alert error';
                        formAlert.textContent = 'Email addresses do not match.';
                        formAlert.style.display = 'block';
                        formAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        return;
                    }

                    const submitBtn = manuscriptForm.querySelector('.submit-btn');
                    const originalBtnHtml = submitBtn.innerHTML;
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';

                    formAlert.style.display = 'none';

                    const formData = new FormData(manuscriptForm);

                    fetch(getFormEndpoint('submit.php'), {
                        method: 'POST',
                        body: formData
                    })
                        .then(parseFormResponse)
                        .then(function (result) {
                            formAlert.className = 'form-alert ' + (result.data.success ? 'success' : 'error');
                            formAlert.textContent = result.data.message;
                            formAlert.style.display = 'block';
                            formAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });

                            if (result.data.success) {
                                redirectToThankYou(manuscriptForm, result.data.params || {});
                                return;
                            }
                        })
                        .catch(function (error) {
                            formAlert.className = 'form-alert error';
                            formAlert.textContent = error.message || 'Something went wrong. Please try again.';
                            formAlert.style.display = 'block';
                        })
                        .finally(function () {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = originalBtnHtml;
                        });
                });
            }

            const consultationForm = document.getElementById('consultationForm');
            const consultationAlert = document.getElementById('consultationAlert');
            const modalOverlay = document.getElementById('modalOverlay');

            if (consultationForm) {
                consultationForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    const submitBtn = consultationForm.querySelector('.submit-btn');
                    const originalBtnHtml = submitBtn.innerHTML;
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
                    consultationAlert.style.display = 'none';

                    fetch(getFormEndpoint('submit-consultation.php'), {
                        method: 'POST',
                        body: new FormData(consultationForm)
                    })
                        .then(parseFormResponse)
                        .then(function (result) {
                            consultationAlert.className = 'form-alert ' + (result.data.success ? 'success' : 'error');
                            consultationAlert.textContent = result.data.message;
                            consultationAlert.style.display = 'block';

                            if (result.data.success) {
                                redirectToThankYou(consultationForm, result.data.params || {});
                                return;
                            }
                        })
                        .catch(function (error) {
                            consultationAlert.className = 'form-alert error';
                            consultationAlert.textContent = error.message || 'Something went wrong. Please try again.';
                            consultationAlert.style.display = 'block';
                        })
                        .finally(function () {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = originalBtnHtml;
                        });
                });
            }
        });
    </script>
    

</body>

</html>