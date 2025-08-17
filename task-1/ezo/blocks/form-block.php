<?php if (get_field('form_heading')): ?>
    <section class="form-section section-padding">
        <div class="container">
            <div class="form-content d-flex gap-4">
                <div class="form-content-section d-flex flex-column gap-3">
                    <?php if (get_field('form_sub_heading')): ?>
                        <p class="text-light"><?= esc_html(get_field('form_sub_heading')); ?></p>
                    <?php endif; ?>
                    <h2><?= esc_html(get_field('form_heading')); ?></h2>
                    <?php if (get_field('form_text')): ?>
                        <p class="text-dark"><?= esc_html(get_field('form_text')); ?></p>
                    <?php endif; ?>
                    <img src="http://localhost/ezo/wp-content/uploads/2025/08/contact-image.png" alt="contact">
                </div>
                <div class="form-submit-section">
                    <form>
                        <div class="form-wrapper d-flex flex-column gap-3">
                            <div class="form-row double d-flex gap-3">
                                <div class="form-group">
                                    <label for="first-name">
                                        <span>First Name</span>
                                        <input type="text" name="first-name">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="last-name">
                                        <span>Last Name</span>
                                        <input type="text" name="last-name">
                                    </label>
                                </div>
                            </div>
                            <div class="form-row double d-flex gap-3">
                                <div class="form-group">
                                    <label for="email">
                                        <span>Email</span>
                                        <input type="email" name="email">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="phone">
                                        <span>Phone</span>
                                        <input type="tel" name="phone">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inquiry">
                                    <span>Inquiry Type</span>
                                    <select name="inquiry">
                                        <option disabled selected>Please Select</option>
                                        <option>General Inquiry</option>
                                        <option>Sales Question</option>
                                        <option>Customer Support</option>
                                        <option>Billing Support</option>
                                    </select>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="message">
                                    <span>Message</span>
                                    <textarea name="message"></textarea>
                                </label>
                            </div>
                            <div class="form-group submit">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>