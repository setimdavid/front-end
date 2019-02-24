<?php require 'header.php'; ?>
<div class="content">
    <div class="container_12">
        <div class="grid_6">
            <h3 class="head1">feedback</h3>
            <form id="form">
                <div class="success_wrapper">
                    <div class="success-message">Contact form submitted</div>
                </div>
                <label class="name">
                    <input type="text" placeholder="Name" data-constraints="@Required @JustLetters" />
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid name.</span>
                </label>

                <label class="email">
                    <input type="text" placeholder="E-mail" data-constraints="@Required @Email" />
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid email.</span>
                </label>
                <label class="website">
                    <input type="text" placeholder="Phone Number"/>
                </label>
                <label class="message">
                    <textarea placeholder="Message" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*The message is too short.</span>
                </label>
                <div>
                    <div class="clear"></div>
                    <div class="btns">
                        <a href="#" data-type="submit" class="btn">send message</a></div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require 'footer.php';?>


