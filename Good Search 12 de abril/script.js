// Obtenha as referências dos elementos HTML relevantes
const form = document.querySelector('form');
const questionsContainer = document.querySelector('#questions-container');
const resultsContainer = document.querySelector('#results-container');

// Crie uma lista de perguntas e respostas
const questions = [
  {
    question: 'De acordo com as opções abaixo, na sua opnião seu setor é:',
    answers: ['Muito bagunçado', 'Bagunçado', 'Poderia ser mais organizado', 'Bom', 'Excelente']
  },
  {
    question: 'O quanto você está feliz com seu trabalho?',
    answers: ['Nenhum pouco', 'Pouco', 'Indiferente', 'Feliz', 'Amo trabalhar aqui']
  },
  {
    question: 'Qual sua pretenção trabalhando conosco',
    answers: ['Sair logo', 'Ficar um bom tempo', 'Pretendo construir minha carreira aqui', 'Outro']
  }
];

// Função que renderiza a lista de perguntas e respostas na página
function renderQuestions() {
  let html = '';
  questions.forEach((q, i) => {
    html += `
      <section>
        <h2>${q.question}</h2>
        <div class="form-group">
          ${q.answers.map((a, j) => `
            <div class="form-check">
              <input class="form-check-input" type="radio" name="question${i}" id="question${i}-${j}" value="${j}"${a === 'Outro' ? 'data-other-question="' + q.question + '"' : ''} required>
              <label class="form-check-label" for="question${i}-${j}">
                ${a}
              </label>
              ${a === 'Outro' ? '<input class="form-control form-control-sm d-none" type="text" name="question' + i + '-other" placeholder="Por favor, especifique" maxlength="100">' : ''}
            </div>
          `).join('')}
        </div>
      </section>
    `;
  });
  questionsContainer.innerHTML = html;
}

// Função que trata o envio do formulário
function handleSubmit(event) {
  event.preventDefault();
  const data = new FormData(form);
  const answers = {};
  for (const entry of data.entries()) {
    const key = entry[0];
    const value = entry[1];
    if (key.endsWith('-other')) {
      answers[key.replace('-other', '')] = value.substring(0, 100);
    } else {
      answers[key] = value;
    }
  }
  localStorage.setItem("answers", JSON.stringify(answers));
  window.location.href = "resultados.html";
}

renderQuestions();
form.addEventListener('submit', handleSubmit);
