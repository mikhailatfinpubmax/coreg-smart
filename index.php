<form name="iterable_optin" action="https://whatsonfinance.com/templp/co-reg/second_page.html" method="GET" class="d-flex flex-column h-100 justify-content-around p-4 p-xl-5">
    <input type="hidden" name="utm_source" id="utm_source" value="<?php echo $_GET['utm_source']; ?>">
    <input type="hidden" name="utm_medium" id="utm_medium" value="LP">
    <input type="hidden" name="utm_campaign" id="utm_campaign" value="TradersOnTrend From0ToHero">
    <input type="hidden" name="utm_content" id="utm_content" value="TradersOnTrend From0ToHero">

    <input placeholder="Enter Your Email" class="form-control fs-5 fw-semibold text-center w-100" type="email" id="email" name="email" required="">
    <div class="checkboxtext form-check pt-3">
        <input class="form-check-input" type="checkbox" value="" id="checkbox" required="">
        <label class="form-check-label fw-light small text-white" for="checkbox">

            I acknowledge I have read and understand the Traders on Trend (<a href="/privacy-policy/">Privacy Policy</a>)
            and Im a Stock Trader (<a href="https://imastocktrader.com/privacy-policy/">Privacy Policy</a>) and consent to the use of
            my personal data for
            marketing purposes by clicking the button.
        </label>



    </div>
    <button type="submit" value="Submit" class="border-0 btn btn-success fs-4 fw-bold text-white w-100 mt-3 yesbtn">Yes!
        Send me that book today!</button>

</form>
<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        // Get form values
        var parameter1Value = document.querySelector('input[name="utm_medium"]').value;
        var parameter2Value = document.querySelector('input[name="utm_campaign"]').value;
        var emailValue = document.querySelector('input[name="email"]').value;
        var utmSourceValue = document.querySelector('input[name="utm_source"]').value;

        // Construct the URLs with query parameters
        var url1 = 'https://path.leadpro.app/OZno6C?utm_source=' + encodeURIComponent(utmSourceValue) + '&utm_medium=' + encodeURIComponent(parameter1Value) + '&utm_campaign=' + encodeURIComponent(parameter2Value) + '&email=' + encodeURIComponent(emailValue);
        var url2 = 'https://whatsonfinance.com/templp/co-reg/second_page.html?email=' + encodeURIComponent(emailValue);

        // AJAX request to the first URL
        var xhr1 = new XMLHttpRequest();
        xhr1.open('GET', url1);
        xhr1.send();

        // AJAX request to the second URL
        var xhr2 = new XMLHttpRequest();
        xhr2.open('GET', url2);
        xhr2.send();

        // Redirect to the second URL
        window.location.href = url2;
    });
</script>
