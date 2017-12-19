<div class="section primary-section" id="contact">
	<div class="triangle"></div>
    <div class="container">
        <!-- Start title section -->
        <div class="title">
            <h1>Contact Me</h1>
            <!-- Section's title goes here -->
            <p>To start a project and get custom plan, fill the form below to contact me.</p>
            <!--Simple description for section goes here. -->
        </div>
        <div class="row-fluid">
            <div class="span12 contact-form center">
                <h3>Start your project today!</h3>
                <div id="successSend" class="alert alert-success invisible">
                    <strong>Well done!</strong>Your message has been sent.</div>
                <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                <form id="contact-form" action="{{ route('index') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <div class="controls">
                            <input class="span12" type="text" id="name" name="name" placeholder="* Your name..." />
                            <div class="error left-align" id="err-name">Please enter your name.</div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input class="span12" type="email" name="email" id="email" placeholder="* Your email..." />
                            <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input class="span12" type="text" id="project" name="project" placeholder="* Your project..." />
                            <div class="error left-align" id="err-name">Please enter your project.</div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <textarea class="span12" name="contact" id="contact" placeholder="* message..."></textarea>
                            <div class="error left-align" id="err-comment">Please enter your message.</div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button id="send-mail" class="message-btn" action="{{ route('index') }}" >Send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="contact" class="contact">
    <div class="section secondary-section">
        <div class="container">
            <div class="title">
                <h1>Location of operation</h1>
                <p>Offline area of operations and alternative means of contact.</p>
            </div>
        </div>
        <div class="container">
            <div class="span9 center contact-info">
                <p>Nairobi, Thika, Meru</p>
                <p>iambmn254@gmail.com</p>
                <p>0726 635 116</p>
                <p>0717 529 722</p>
            </div>
            <br />
            <br />
            <div class="row-fluid centered">
                <ul class="social">
                    <li>
                        <a href="">
                            <span class="fa fa-facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="fa fa-linkedin"></span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="fa fa-twitter"></span>
                        </a>
                         <a href="">
                            <span class="fa fa-instagram"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>