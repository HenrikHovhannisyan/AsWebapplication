document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('punkte').readOnly = true;
    document.getElementById('stufe').readOnly = true;
    const percent = document.querySelector("#provision");
    const kaufanbot = document.querySelector("#kaufanbot");
    const punkte = document.querySelector("#punkte");
    const stufe = document.querySelector("#stufe");

    const btn_calc = document.querySelector("#btn_calc");

    btn_calc.addEventListener('click', () => {
        const percentValue = percent.value;
        const kaufanbotValue = kaufanbot.value;

        const punkteValue = ((kaufanbotValue * percentValue / 100) / 30);

        punkte.value = punkteValue.toFixed(2);

        if (punkte.value <= 100) {
            stufe.value = 1
        } else if (punkte.value >= 100 && punkte.value < 750) {
            stufe.value = 2
        } else if (punkte.value >= 750 && punkte.value < 2500) {
            stufe.value = 3
        } else if (punkte.value >= 2500 && punkte.value < 6500) {
            stufe.value = 4
        } else if (punkte.value >= 6500 && punkte.value < 15000) {
            stufe.value = 5
        } else if (punkte.value >= 15000 && punkte.value < 30000) {
            stufe.value = 6
        } else if (punkte.value >= 30000 && punkte.value < 50000) {
            stufe.value = 7
        } else if (punkte.value >= 50000) {
            stufe.value = 8
        }

    });
});
