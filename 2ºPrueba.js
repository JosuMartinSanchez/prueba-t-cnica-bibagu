function countingValley(n, c) {
  if (n < 2 && n > 1000) {
    return;
  }
  if (!c == "A" || !c == "D") {
    return;
  }
  let pasos = c.split("");
  let counterValley = 0;
  let counterAD = 0;

  for (let i = 0; i < n; i++) {
    if (pasos[i] === "D") {
      counterAD--;
    } else {
      counterAD++;
    }
    if (counterAD === 0 && c[i] === "A") {
      counterValley++;
    }
  }
  return counterValley;
}

const c = "ADDDADAA";
console.log(countingValley(8, c));
