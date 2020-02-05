
<div class="deal-row">
  <div class="deal_label">
    <label>Name of the company</label>
  </div>
  <div class="deal_field">
    <input type="text" name="deals_name" id="deals_name" value="<?php echo $deal_name; ?>" />
  </div>
</div>

<div class="deal-row">
  <div class="deal_label">
    <label>Sectors</label>
  </div>
  <div class="deal_field">
    <select name="deal_sectors" id="deal_sectors" required>
        <option value="">Please Select Sectors..</option>
        <option value="ecommerce" <?php selected($deal_sectors, 'ecommerce'); ?>>E-commerce</option>
        <option value="fintech" <?php selected($deal_sectors, 'fintech'); ?>>FinTech</option>
        <option value="consumer_services" <?php selected($deal_sectors, 'consumer_services'); ?>>Consumer Services</option>
        <option value="healthtech" <?php selected($deal_sectors, 'healthtech'); ?>>HealthTech</option>
        <option value="edtech" <?php selected($deal_sectors, 'edtech'); ?>>EdTech</option>
        <option value="agritech" <?php selected($deal_sectors, 'agritech'); ?>>AgriTech</option>
        <option value="logistics" <?php selected($deal_sectors, 'logistics'); ?>>Logistics</option>

    </select>
  </div>
</div>

<div class="deal-row">
  <div class="deal_label">
    <label>Launch Year</label>
  </div>
  <div class="deal_field">
    <input type="date" name="launch_year" id="launch_year" value="<?php echo $launch_year;  ?>" />
  </div>
</div>

<div class="deal-row">
  <div class="deal_label">
    <label>Founders</label>
  </div>
  <div class="deal_field">
    <input type="text" name="founders" id="founders" value="<?php echo $founders;  ?>" />
  </div>
</div>

<div class="deal-row">
  <div class="deal_label">
    <label>Deal Stage</label>
  </div>
  <div class="deal_field">
    <select name="deal_stage" id="deal_stage" required>
        <option value="">Please Select Deal Stage..</option>
        <option value="seed" <?php selected($deal_stage, 'seed'); ?>>Seed</option>
        <option value="pre_series_a" <?php selected($deal_stage, 'pre_series_a'); ?>>Pre-Series A</option>
        <option value="series_a" <?php selected($deal_stage, 'series_a'); ?>>Series A</option>
        <option value="pre_series_b" <?php selected($deal_stage, 'pre_series_b'); ?>>Pre-Series B</option>
        <option value="series_b" <?php selected($deal_stage, 'series_b'); ?>>Series B</option>
        <option value="series_c" <?php selected($deal_stage, 'series_c'); ?>>Series C</option>
        <option value="series_d" <?php selected($deal_stage, 'series_d'); ?>>Series D</option>
        <option value="series_e" <?php selected($deal_stage, 'series_e'); ?>>Series E</option>
        <option value="series_f" <?php selected($deal_stage, 'series_f'); ?>>Series F</option>
        <option value="late_stage" <?php selected($deal_stage, 'late_stage'); ?>>Late Stage</option>
        <option value="debt_financing" <?php selected($deal_stage, 'debt_financing'); ?>>Debt Financing</option>
        <option value="acquisition" <?php selected($deal_stage, 'acquisition'); ?>>Acquisition</option>
        <option value="ipo" <?php selected($deal_stage, 'ipo'); ?>>IPO</option>

    </select>
  </div>
</div>

<div class="deal-row">
  <div class="deal_label">
    <label>Funding Amount</label>
  </div>
  <div class="deal_field">
    <input type="number" name="funding_amount" id="funding_amount" value="<?php echo $funding_amount;  ?>" />
  </div>
</div>

<div class="deal-row">
  <div class="deal_label">
    <label>Investors</label>
  </div>
  <div class="deal_field">
    <input type="text" name="investors" id="investors" value="<?php echo $investors;  ?>" />
  </div>
</div>

<div class="deal-row">
  <div class="deal_label">
    <label>Article Title</label>
  </div>
  <div class="deal_field">
    <input type="text" name="article_title" id="article_title" value="<?php echo $article_title;  ?>" />
  </div>
</div>

<div class="deal-row">
  <div class="deal_label">
    <label>Link to Article</label>
  </div>
  <div class="deal_field">
    <input type="url" name="article_link" id="article_link" value="<?php echo $article_link;  ?>" />
  </div>
</div>
