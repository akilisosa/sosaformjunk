<script>
    onerror = errorHandler;
    document.writ("welcome to this website")

    function errorHandler(message, url, line)
    {
        out = "sorry, an error was encountered. \n\n";
        out+= "error: " +message +"\n";
        out+= "URL: " + url + "\n";
        out+= "Line: " + line +"\n\n";
        out+= "Click ok to continue. \n\n";
        alert(out);
        return true; 
    }
</script>