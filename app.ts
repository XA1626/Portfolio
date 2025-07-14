const fullText = "Full-stack Developer & UI/UX Designer";
let typedText = "";
let index = 0;

function typeWriter() {
  if (index < fullText.length) {
    typedText += fullText.charAt(index);
    const el = document.getElementById("typed-text");
    if (el) el.textContent = typedText + "|";
    index++;
    setTimeout(typeWriter, 100);
  }
}

typeWriter();

// Scroll to section
function scrollToSection(id: string) {
  const el = document.getElementById(id);
  if (el) el.scrollIntoView({ behavior: "smooth" });
}

// ECharts setup
// Import ECharts (make sure you have installed it via npm or have it available globally)
import * as echarts from "echarts";

window.addEventListener("DOMContentLoaded", () => {
  const chartDom = document.getElementById("skillsChart");
  if (chartDom) {
    const myChart = echarts.init(chartDom);
    const option = {
      radar: {
        indicator: [
          { name: "React", max: 100 },
          { name: "TypeScript", max: 100 },
          { name: "Node.js", max: 100 },
          { name: "UI/UX Design", max: 100 },
          { name: "Database", max: 100 },
          { name: "DevOps", max: 100 },
        ],
      },
      series: [
        {
          type: "radar",
          data: [
            {
              value: [90, 85, 80, 95, 75, 70],
              name: "Skills",
            },
          ],
        },
      ],
    };
    myChart.setOption(option);
    window.addEventListener("resize", () => myChart.resize());
  }
});
