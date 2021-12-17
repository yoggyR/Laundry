<!-- LINK JAVASCRIPT -->
<script src="../../JS/bootstrap.js"></script>
<script src="../../JS/jquery-3.6.0.min.js"></script>
<script src="../../JS/jquery.mask.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<!-- /LINK JAVASCRIPT -->

<!-- SYNTAX JAVASCRIPT/JQUERY -->
<script>
    // button on and off
    function buttonOnOff() {
        $("#on").toggle()
        $("#off").toggle()
    }

    $('#idr').mask('000.000.000.000', {
        reverse: true
    });
    
    $(function() {
        $("#datepicker").datepicker();
    });
</script>
<!-- /SYNTAX JAVASCRIPT/JQUERY -->
</body>

</html>