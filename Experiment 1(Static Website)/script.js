function calculateTotal() {
  const totalPrice =parseFloat(document.getElementById('appetizers').value)+parseFloat(document.getElementById('entrees').value)+parseFloat(document.getElementById('drinks').value)+parseFloat(document.getElementById('desserts').value);
  document.getElementById('total').innerHTML=totalPrice;
}
document.getElementById('order').addEventListener('submit', function(e) {
  e.preventDefault();
  calculateTotal();
});