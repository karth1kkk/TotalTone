document.getElementById('calorie-form').addEventListener('submit', function(e) {
  document.getElementById('results').style.display = 'none';
  document.getElementById('zig1').style.display = 'none';
  document.getElementById('zig2').style.display = 'none';
  document.getElementById('loading').style.display = 'block';

  setTimeout(calculateCalories, 2000);

  e.preventDefault();
});

function calculateCalories() {
  const age = document.getElementById('age');
  const gender = document.querySelector('input[name="customRadioInline1"]:checked');
  const weight = document.getElementById('weight');
  const height = document.getElementById('height');
  const activity = parseFloat(document.getElementById('list').value);
  const goal = document.getElementById('goal').value;
  const totalCalories = document.getElementById('total-calories');
  const caloricIntakeTable1 = document.getElementById('caloric-intake-table');
  const caloricIntakeTable2 = document.getElementById('caloric-intake-table2');
  const tbody1 = document.querySelector('#caloric-intake-table1 .tbody1');
  const tbody2 = document.querySelector('#caloric-intake-table2 .tbody2');
  tbody1.innerHTML = '';
  tbody2.innerHTML = '';

  if (age.value === '' || weight.value === '' || height.value === '' || 80 < age.value || age.value < 15) {
    errorMessage('Please make sure the values you entered are correct');
  } else {
    let baseCalories;

    if (gender.id === 'male') {
      baseCalories = 50 + (5.9 * parseFloat(weight.value)) + (2.5 * parseFloat(height.value)) - (4 * parseFloat(age.value));
    } else {
      baseCalories = 500 + (6 * parseFloat(weight.value)) + (0.3 * parseFloat(height.value)) - (2 * parseFloat(age.value));
    }

    let totalCaloriesValue;

    if (goal === 'extreme-loss') {
      totalCaloriesValue = baseCalories * activity * 0.6;
    } else if (goal === 'moderate-loss') {
      totalCaloriesValue = baseCalories * activity * 0.8;
    } else if (goal === 'slow-loss') {
      totalCaloriesValue = baseCalories * activity * 0.9;
    } else if (goal === 'extreme-gain') {
      totalCaloriesValue = baseCalories * activity * 1.4;
    } else if (goal === 'moderate-gain') {
      totalCaloriesValue = baseCalories * activity * 1.2;
    } else if (goal === 'slow-gain') {
      totalCaloriesValue = baseCalories * activity * 1.1;
    } else {
      totalCaloriesValue = baseCalories * activity;
    }

    totalCalories.value = totalCaloriesValue.toFixed(2);

    for (let i = 1; i <= 7; i++) {
      let zigzagCalories1;
      
      if (i === 1 || i === 7) {
        zigzagCalories1 = totalCaloriesValue * 1.182; // Increase the calories by multiplying by 1.2
      } else {
        zigzagCalories1 = totalCaloriesValue * 0.927198; // Decrease the calories by multiplying by 0.8
      }
      
      const row1 = document.createElement('tr');
      const dayCell1 = document.createElement('td');
      const caloricIntakeCell1 = document.createElement('td');

      dayCell1.textContent = 'Day ' + i;
      caloricIntakeCell1.textContent = zigzagCalories1.toFixed(2) + ' kcal';

      row1.appendChild(dayCell1);
      row1.appendChild(caloricIntakeCell1);
      tbody1.appendChild(row1);
    }

    // Make each calorie per day equal to the total calories
    const equalCaloriesPerDay = totalCaloriesValue;

    for (let i = 1; i <= 7; i++) {
      const row2 = document.createElement('tr');
      const dayCell2 = document.createElement('td');
      const caloricIntakeCell2 = document.createElement('td');

      dayCell2.textContent = 'Day ' + i;
      caloricIntakeCell2.textContent = equalCaloriesPerDay.toFixed(2) + ' kcal';

      row2.appendChild(dayCell2);
      row2.appendChild(caloricIntakeCell2);
      tbody2.appendChild(row2);
    }
  }
    
  document.getElementById('results').style.display = 'block';
  document.getElementById('zig1').style.display = 'block';
  document.getElementById('zig2').style.display = 'block';
  document.getElementById('loading').style.display = 'none';
}

function errorMessage(error) {
  document.getElementById('results').style.display = 'none';
  document.getElementById('zig1').style.display = 'none';
  document.getElementById('zig2').style.display = 'none';
  document.getElementById('loading').style.display = 'none';

  const errorDiv = document.createElement('div');
  const card = document.querySelector('.card');
  const heading = document.querySelector('.heading');
  errorDiv.className = 'alert alert-danger';
  errorDiv.appendChild(document.createTextNode(error));

  card.insertBefore(errorDiv, heading);

  setTimeout(clearError, 4000);
}

function clearError() {
  document.querySelector('.alert').remove();
}