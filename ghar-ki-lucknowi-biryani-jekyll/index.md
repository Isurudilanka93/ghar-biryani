
---
layout: default
title: Home
permalink: /
---

<div class="banner">
  <img src="/assets/banner.jpg" alt="Ghar Ki Lucknowi Biryani Banner">
</div>
<div class="description">
  <h2>Handcrafted with love, inspired by Lucknow’s royal kitchens.</h2>
  <p>Ghar Ki Lucknowi Biryani delivers hot, flavorful biryani made with authentic Awadhi spices—straight to your doorstep!</p>
  <p>🚗🍲 Fast delivery across the city — just a tap away!</p>
</div>

<form action="/submit.php" method="POST" onsubmit="return submitForm()">
    <input type="hidden" name="location" id="location" required>
    <label>Name: <input type="text" name="name" required></label><br>
    <label>Phone: <input type="tel" name="phone" required></label><br>
    <label>Number of Parcels: <input type="number" name="parcels" required min="1"></label><br>
    <label>Payment Method:</label><br>
    <input type="radio" name="payment" value="Cash on Delivery" required> Cash on Delivery<br>
    <input type="radio" name="payment" value="Online Payment"> Online Payment<br>
    <button type="submit">Place Order</button>
</form>

<script src="/assets/script.js"></script>
