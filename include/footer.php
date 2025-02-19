    <style>
        footer{
    display: flex;
    justify-content: center;
    background-color: rgb(35, 170, 30);
    color: #fff;
  }
  
  footer p{
    padding: 1rem;
  }
  
    </style>
    <footer>
        <p>RUDI &#169; <span id='year'></span>.</p>
    </footer> 
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        document.getElementById('year').textContent = new Date().getFullYear()
    </script>
    <script src="../assets/js/navigation.js"></script>
    </body>
</html>