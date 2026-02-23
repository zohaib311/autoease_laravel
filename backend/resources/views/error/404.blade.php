 <style>
     * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     }

     body {
         height: 100vh;
         display: flex;
         justify-content: center;
         align-items: center;
         background: linear-gradient(135deg, #667eea, #764ba2);
         color: white;
     }

     .container {
         text-align: center;
     }

     h1 {
         font-size: 6rem;
         font-weight: 700;
         margin-bottom: 1rem;
     }

     p {
         font-size: 1.5rem;
         margin-bottom: 2rem;
         opacity: 0.9;
     }

     .btn {
         display: inline-block;
         padding: 12px 30px;
         font-size: 1rem;
         color: #764ba2;
         background: white;
         border-radius: 30px;
         text-decoration: none;
         transition: all 0.3s ease;
     }

     .btn:hover {
         background: #f0f0f0;
         transform: translateY(-3px);
         box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
     }

     @media (max-width: 600px) {
         h1 {
             font-size: 4rem;
         }

         p {
             font-size: 1.2rem;
         }
     }
 </style>
 <div class="container">
     <h1 class="bg-red-500 text-white p-5">404</h1>
     <p>Oops! The page you're looking for doesn't exist.</p>
     <a href="/" class="btn">Go Home</a>
 </div>
