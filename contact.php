<?php
$meta = '<script src="js/jquery.validate.min.js" type="text/javascript"></script>';
$title = 'Contact';
require('includes/header.php');
?>
            </div>
        </header>

        <section class="container" id="contact">
            <h2>Contact</h2>

            <div class="row">
                <div class="col-50">
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=BS311EW&amp;aq=&amp;sll=51.413355,-2.497869&amp;sspn=0.012112,0.028539&amp;ie=UTF8&amp;hq=&amp;hnear=Keynsham+BS31+1EW,+United+Kingdom&amp;t=m&amp;ll=51.413394,-2.497072&amp;spn=0.018736,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                </div>

                <div class="col-50">
                    <address>
                        Carpenters Lane<br />
                        Keynsham<br />
                        Bristol<br />
                        England</br>
                        BS31 1EW
                    </address>

                    <p>Phone: 07951634661</p>
                    <p>Email: <a href="mailto:emailme@mikeoram.co.uk">emialme@mikeoram.co.uk</a></p>
                    <p>Twitter: <a href="">@MPOram</a></p>
                </div>
            </div>
        </section>

        <div class="alt-color">
            <section class="container">
                <h2>Get in touch</h2>
                <div class="row">
                    <form>
                        <div class="col-33">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div class="col-33">
                            <label for="email">Email*</label>
                            <input type="text" name="email" id="email" required>
                            <span></span>
                        </div>
                        <div class="col-33">
                            <select name="topic" required id="topic">
                                <option selected value="">Topic*</option>
                                <option value="Freelance">Freelance</option>
                                <option value="Permanunt Employment">Permanunt Employment</option>
                                <option value="Advise">Advise</option>
                                <option value="General">General Chat</option>
                            </select>
                            <span></span>
                        </div>
                        <div class="col-100">
                            <label for="message">Message*</label>
                            <textarea name="message" required id="message"></textarea>
                            <span></span>
                        </div>
                        <div class="col-100">
                            <input type="submit" value="Submit" class="btn-link">
                            <input type="reset" value="Clear" class="btn-link">
                        </div>
                    </form>
                </div>
            </section>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-50">
                        <address>
                            Carpenters Lane<br />
                            Keynsham<br />
                            Bristol<br />
                            England</br>
                            BS31 1EW
                        </address>
                    </div>

                    <div class="col-50">
                        <div>
                            <a href="mailto:emailme">emailme@mikeoram.co.uk</a>
                            07951634661
                            <a href="#">Twitter</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <a href='#top' class="scrollTop"><img class="icon" src="http://livedemo00.template-help.com/wt_47123/images/totop.png" alt="Scroll to top" /></a>
                </div>

                <div class="row">
                    <p>&copy; Copyright 2014 | All rights reserved</p>
                </div>

            </div>
        </footer>
    </div>
    <script type="text/javascript">
		$('form').validate({
			errorPlacement: function (error, element) {
				element.addClass('error').next('span').text(error.text());
			 }
		});
	</script>
</body>
</html>
