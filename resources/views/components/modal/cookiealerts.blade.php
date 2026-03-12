

<div id="cookie-popup" class="cookie-class-design" style="display: none;">
    <p>This website uses cookies to improve user experience.</p>
    <button id="accept-cookies" class="btn btn-cookies">Accept</button>
    <button id="reject-cookies" class="btn btn-cookies-reject">Reject</button>
    <button id="set-preferences" class="btn btn-cookies py-2">Set prefs</button>
</div>

<div id="preferences-modal" class="modal">
  <div class="modal-content">
    <span class="close d-none" >&times;</span>
    <h2>Ishc cookies preference</h2>
    <p>Manage and control how your data is used</p>
    <div>
      <label for="analytics-toggle">Website Analytics</label>
      <p>Allow us to collect anonymous data about how you use our website. This helps us understand how to improve our site and provide you with a better experience.</p>
      <label class="toggle-switch">
        <input type="checkbox" id="analytics-toggle">
        <span class="slider"></span>
      </label>
    </div>
    <div>
      <label for="marketing-toggle">Marketing & Personalization</label>
      <p>Enable personalized marketing messages and ads based on your browsing activity. This helps us tailor our communications to your interests and preferences.</p>
      <label class="toggle-switch">
        <input type="checkbox" id="marketing-toggle">
        <span class="slider"></span>
      </label>
    </div>
    <button id="save-preferences" class="btn btn-preference">Save Preferences</button>
  </div>
</div>
