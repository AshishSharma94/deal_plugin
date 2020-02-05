<div class="filters">
  <form method="get">
    <span class="filter">
      <select name="sector">
        <option value="">Sectors</option>
        <option value="ecommerce" <?php selected($_GET['sector'], 'ecommerce'); ?>>E-commerce</option>
        <option value="fintech" <?php selected($_GET['sector'], 'fintech'); ?>>FinTech</option>
        <option value="consumer_services" <?php selected($_GET['sector'], 'consumer_services'); ?>>Consumer Services</option>
        <option value="healthtech" <?php selected($_GET['sector'], 'healthtech'); ?>>HealthTech</option>
        <option value="edtech" <?php selected($_GET['sector'], 'edtech'); ?>>EdTech</option>
        <option value="agritech" <?php selected($_GET['sector'], 'agritech'); ?>>AgriTech</option>
        <option value="logistics" <?php selected($_GET['sector'], 'logistics'); ?>>Logistics</option>
      </select>
    </span>
    <span class="filter">
      <select name="launch">
        <option value="">Launch Year</option>
        <option value="2020" <?php selected($_GET['launch'], '2020'); ?>>2020</option>
        <option value="2019" <?php selected($_GET['launch'], '2019'); ?>>2019</option>
        <option value="2018" <?php selected($_GET['launch'], '2018'); ?>>2018</option>
        <option value="2017" <?php selected($_GET['launch'], '2017'); ?>>2017</option>
        <option value="2016" <?php selected($_GET['launch'], '2016'); ?>>2016</option>
        <option value="2015" <?php selected($_GET['launch'], '2015'); ?>>2015</option>
        <option value="2014" <?php selected($_GET['launch'], '2014'); ?>>2014</option>
      </select>
    </span>
    <span class="filter">
      <select name="stage">
        <option value="">Deal Stage</option>
        <option value="seed" <?php selected($_GET['stage'], 'seed'); ?>>Seed</option>
        <option value="pre_series_a" <?php selected($_GET['stage'], 'pre_series_a'); ?>>Pre-Series A</option>
        <option value="series_a" <?php selected($_GET['stage'], 'series_a'); ?>>Series A</option>
        <option value="pre_series_b" <?php selected($_GET['stage'], 'pre_series_b'); ?>>Pre-Series B</option>
        <option value="series_b" <?php selected($_GET['stage'], 'series_b'); ?>>Series B</option>
        <option value="series_c" <?php selected($_GET['stage'], 'series_c'); ?>>Series C</option>
        <option value="series_d" <?php selected($_GET['stage'], 'series_d'); ?>>Series D</option>
        <option value="series_e" <?php selected($_GET['stage'], 'series_e'); ?>>Series E</option>
        <option value="series_f" <?php selected($_GET['stage'], 'series_f'); ?>>Series F</option>
        <option value="late_stage" <?php selected($_GET['stage'], 'late_stage'); ?>>Late Stage</option>
        <option value="debt_financing" <?php selected($_GET['stage'], 'debt_financing'); ?>>Debt Financing</option>
        <option value="acquisition" <?php selected($_GET['stage'], 'acquisition'); ?>>Acquisition</option>
        <option value="ipo" <?php selected($_GET['stage'], 'ipo'); ?>>IPO</option>
      </select>
    </span>
    <span class="filter">
      <select name="amount">
        <option value="">Funding Amount</option>
        <option value="first" <?php selected($_GET['amount'], 'first'); ?>>0 - 100000</option>
        <option value="second" <?php selected($_GET['amount'], 'second'); ?>>100000 - 1000000</option>
        <option value="third" <?php selected($_GET['amount'], 'third'); ?>>1000000 - 10000000</option>
      </select>
    </span>
    <span class="filter">
      <select name="order">
        <option value="">Order</option>
        <option value="asc" <?php selected($_GET['order'], 'asc'); ?>>ASC</option>
        <option value="desc" <?php selected($_GET['order'], 'desc'); ?>>DESC</option>
      </select>
    </span>
    <span class="filter button">
    <input type="submit" value="Filter" />
    </span>
  </form>
</div>
