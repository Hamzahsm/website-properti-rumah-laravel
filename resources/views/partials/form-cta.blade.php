<div class="contact">
    <div class="contact_background" style="background-image:url(images/contact.png)"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact_image">
                    
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact_form_container">
                    <div class="contact_title">get in touch</div>
                    <form action="{{ route('store.get.in.touch') }}" id="contact_form" class="contact_form" method="POST">
                        @csrf 
                        <input type="text" id="contact_form_name" class="contact_form_name input_field" name="name" placeholder="Name" required="required" data-error="Name is required.">
                        <input type="text" id="contact_form_email" class="contact_form_email input_field" name="email" placeholder="E-mail" required="required" data-error="Email is required.">
                        <input type="text" id="contact_form_subject" class="contact_form_subject input_field" name="subject" placeholder="Subject" required="required" data-error="Subject is required.">
                        <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                        <button type="submit" id="form_submit_button" class="form_submit_button button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Kirim</button>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>