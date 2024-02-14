<?php

/**
 * Whatsapp Form Component
 */
defined('ABSPATH') or die('No script kiddies please!');
?>
<div class="waf-wr" data-phone-url="<?php echo esc_html(mm_get_website_data()['phone-url']); ?>">
    <div class="wf-item">
        <!-- input text for name with validation letter only -->
        <label for="waf-name">Nama</label>
        <input type="text" id="waf-name" name="waf-name" placeholder="Nama" pattern="[A-Za-z\s]+" required>
        <span class="val-wrong">Nama harus huruf saja</span>
    </div>
    <div class="wf-item">
        <label for="waf-email">Email</label>
        <input type="email" id="waf-email" name="waf-email" placeholder="Email">
        <span class="val-wrong">Email e.g email@email.com</span>
    </div>
    <div class="wf-item">
        <label for="waf-phone">No. HP</label>
        <input type="text" id="waf-phone" name="waf-phone" placeholder="No. HP">
        <span class="val-wrong">e.g 0813-9891-2341</span>
    </div>
    <div class="wf-item">
        <label for="waf-subject">Subjek</label>
        <input type="text" id="waf-subject" name="waf-subject" placeholder="Subjek" pattern="[A-Za-z\s]+">
        <span class="val-wrong">Subjek harus huruf saja</span>
    </div>
    <div class="wf-item">
        <label for="waf-message">Pesan</label>
        <textarea id="waf-message" name="waf-message" placeholder="Pesan" required></textarea>
    </div>
    <div class="wf-item">
        <button id="waf-submit" name="waf-submit" class="the-btn wa-bg"><i class="fab fa-whatsapp"></i>Kirim</button>
    </div>
</div>