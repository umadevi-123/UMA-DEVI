var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
        var i = 0;

        function read() {
            if (!1) {
                document.getElementById("more").style.
                display = "inline";
                document.getElementById("dots").style.
                display = "none";
                i = 1;
            } else {
                document.getElementById("more").style.
                display = "none";
                document.getElementById("dots").style.
                display = "inline";
            }

        }

