const calculateData = (investment) => {
  const terreno160 = {
    valor_inicial: {
      '1 año': 639936,
      '2 año': 639936,
      '3 año': 639936
    },
    plusvalia: {
      '1 año': 63993.6,
      '2 año': 127987.20,
      '3 año': 191980.8
    }
  };

  const terreno200 = {
    valor_inicial: {
      '1 año': 799920,
      '2 año': 799920,
      '3 año': 799920
    },
    plusvalia: {
      '1 año': 79992,
      '2 año': 159984,
      '3 año': 239976
    }
  };

  const terreno128 = {
    valor_inicial: {
      '1 año': 614338.56,
      '2 año': 614338.56
    },
    plusvalia: {
      '1 año': 61433.89,
      '2 año': 122867.71
    }
  };

  let data = {};
  switch (investment) {
    case 3:
      data = terreno160;
      break;
    case 4:
      data = terreno200;
      break;
    case 5:
      data = terreno128;
      break;
    default:
      data = terreno160;
  }

  return {
    valor_inicial: Object.values(data.valor_inicial),
    plusvalia: Object.values(data.plusvalia)
  };
};

const getOptionChart = (data) => {
  return {
    tooltip: {
      trigger: 'axis',
      axisPointer: {
        type: 'shadow'
      }
    },
    xAxis: {
      type: 'category',
      data: ['1 año', '2 años', '3 años']
    },
    yAxis: {
      type: 'value'
    },
    series: [
      {
        data: data.valor_inicial,
        type: 'bar',
        stack: 'a',
        name: 'Inversión inicial',
        color: ['#D9D9D9']
      },
      {
        data: data.plusvalia,
        type: 'bar',
        stack: 'a',
        name: 'Plusvalía',
        color: ['#568CCA']
      }
    ]
  };
};

const initCharts = () => {
  const chart = echarts.init(document.getElementById('chart'));
  const initialInvestment = 3; // Inversión inicial predeterminada (terreno 160 m2)
  const data = calculateData(initialInvestment);
  chart.setOption(getOptionChart(data));

  document.getElementById('investment-select-2').addEventListener('change', function () {
    const selectedInvestment = parseInt(this.value);
    const newData = calculateData(selectedInvestment);
    chart.setOption(getOptionChart(newData));
});
};

window.addEventListener("load", () => {
  initCharts();
});
