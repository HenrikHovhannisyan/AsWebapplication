document.addEventListener('DOMContentLoaded', () => {
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
        const stufeValue = stufe.value;

        console.log("Punkte:", punkteValue.toFixed(2));
    });
});
