<?php defined('SECURE_ACCESS') or die('Direct access not allowed'); ?>
<?php include(__DIR__ . '/../component/header.php'); ?>
<style>
        /* Unique Class-Based Styling */
        .error-page-body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #0f172a;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #f8fafc;
        }

        .error-card-container {
            text-align: center;
            padding: 2rem;
            max-width: 500px;
        }

        .error-code-highlight {
            font-size: 8rem;
            font-weight: 900;
            line-height: 1;
            margin: 0;
            background: linear-gradient(to right, #f8bf38ff, #f8bf38d5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .error-msg-main {
            font-size: 1.5rem;
            margin: 1rem 0;
            color: #94a3b8;
        }

        .error-back-link {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.75rem 1.5rem;
            background-color: #f8bf38ff;
            color: #0f172a;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: transform 0.2s ease;
        }

        .error-back-link:hover {
            transform: scale(1.05);
            background-color: #060606ff;
        }
    </style>
</head>


<section>

<div class="error-page-body">
      <div class="error-card-container">
        <h1 class="error-code-highlight">404</h1>
        <p class="error-msg-main">The page you are trying to find does not exist.</p>
        
        <a href="/" class="error-back-link">
            Back to Home
        </a>
    </div>

</div>
  



</section>


<?php include(__DIR__ . '/../component/footer.php'); ?>