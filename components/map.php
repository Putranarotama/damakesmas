<?php
/**
 * components/map.php
 * Responsibilities: Map embed, legend, location card, popup overlay
 */
?>
<div class="map-card" data-animate>
  <div class="map-card-header">
    <span class="table-header-title">TITIK FASKES</span>
    <div class="map-legend" aria-label="Legenda peta">
      <span class="map-legend-item">
        <span class="map-legend-dot" style="background:#1A4A3C;" aria-hidden="true"></span>
        Primary Hubs
      </span>
      <span class="map-legend-item">
        <span class="map-legend-dot" style="background:#46C98A;" aria-hidden="true"></span>
        Operations
      </span>
    </div>
  </div>
  <div class="map-container" style="position:relative;">
    <!-- Google Maps Embed - Denpasar, Bali -->
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63174.55280831455!2d115.17241754999999!3d-8.673063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2407ac2da5b31%3A0x6296b7e1a554d1e5!2sDenpasar%2C%20Denpasar%20City%2C%20Bali!5e0!3m2!1sen!2sid!4v1700000000000"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      title="Peta titik fasilitas kesehatan Kota Denpasar"
      aria-label="Google Maps menampilkan titik fasilitas kesehatan di Kota Denpasar">
    </iframe>
