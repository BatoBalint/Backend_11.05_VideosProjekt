var hotLvlInput;

function init() {
  hotLvlInput = document.getElementById('hotLvlInput');
  hotLvlInput.addEventListener('change', hotLvlInputChange);
}

document.addEventListener('DOMContentLoaded', init);

function hotLvlInputChange() {
  //alert('test');
  if (hotLvlInput.value > 5) {
    hotLvlInput.value = 5;
  } else if (hotLvlInput.value < 0) {
    hotLvlInput.value = 0;
  }
}
