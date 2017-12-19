<div id="successSend" class="alert alert-success invisible">
                    <strong>Well done!</strong>Your message has been sent.</div>
                <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                <form id="contact-form" action="{{ route('index') }}" method="POST" data-parsley-validate="">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <div class="controls">
                            <input class="span12" type="text" id="name" name="name" placeholder="* Your name..." required ="", maxlength = "25", minlength = "2" />
                            <!-- <div class="error left-align" id="err-name">Please enter your name.</div> -->
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
                            <textarea class="span12" name="message" id="message" placeholder="* message..."></textarea>
                            <div class="error left-align" id="err-comment">Please enter your message.</div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button id="send-mail" class="message-btn">Send message</button>
                        </div>
                    </div>
                </form>