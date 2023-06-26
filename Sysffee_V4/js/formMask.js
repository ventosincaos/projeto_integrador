function formatarCEP(input) {
    if (input.value.length === 5) {
      input.value += "-";
    }
  } //12345-789 cep tem maxlength=10
  
  function formatarCPF(input) {
    if (input.value.length === 3 || input.value.length === 7) {
      input.value += ".";
    } else if (input.value.length === 11) {
      input.value += "-";
    }
  }//123.567.911-11 cpf tem maxlength=14
  
  function formatarTelefone(input) {
    if (input.value.length === 1) {
      input.value = "(" + input.value;
    } else if (input.value.length === 3) {
      input.value += ") ";
    } else if (input.value.length === 10) {
      input.value += "-";
    }
  }//(12) 56789-1234 maxlength=15

  
  function formatarData(input) {
    if (input.value.length === 2 || input.value.length === 5) {
      input.value += "/";
    }
  } // dd/mm/aaaa maxlength=10

  //rg muda a configuração de pontos de estado para estado
