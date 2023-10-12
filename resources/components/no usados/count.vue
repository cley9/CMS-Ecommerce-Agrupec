<template>
    <div>
    <h1>Conteo Regresivo de Promoción</h1>
    <p>{{ hours }} horas {{ minutes }} minutos {{ seconds }} segundos</p>
  </div>
  </template>
  
  <script>
//   this is por segundo la peticion no es bueno 
//   export default {
//     data() {
//       return {
//         hours: 0,
//         minutes: 0,
//         seconds: 0,
//       };
//     },
//     mounted() {
//         this.fetchPromotionCountdown();
//     setInterval(this.fetchPromotionCountdown, 1000);
//     },
//     methods: {
//         async fetchPromotionCountdown() {
//       try {
//         const response = await fetch("/api/promocionCoutDow");
//         if (response.ok) {
//           const data = await response.json();
//           this.hours = data.hours;
//           this.minutes = data.minus;
//           this.seconds = data.secong;
//         } else {
//           console.error("Error al obtener datos de la API");
//         }
//       } catch (error) {
//         console.error("Error al obtener datos de la API:", error);
//       }
//     },
//     },
//   };

export default {
  data() {
    return {
      hours: 0,
      minutes: 0,
      seconds: 0,
    };
  },
  mounted() {
    this.fetchPromotionCountdown();
  },
  methods: {
    async fetchPromotionCountdown() {
      try {
        const response = await fetch("/api/promocionCoutDow");
        if (response.ok) {
          const data = await response.json();
          this.hours = data.hours;
          this.minutes = data.minus;
          this.seconds = data.secong;
          this.startCountdown();
        } else {
          console.error("Error al obtener datos de la API");
        }
      } catch (error) {
        console.error("Error al obtener datos de la API:", error);
      }
    },
    startCountdown() {
      setInterval(() => {
        if (this.seconds > 0) {
          this.seconds--;
        } else if (this.minutes > 0) {
          this.minutes--;
          this.seconds = 59;
        } else if (this.hours > 0) {
          this.hours--;
          this.minutes = 59;
          this.seconds = 59;
        } else {
          // El tiempo ha terminado, puedes manejarlo como desees
          clearInterval(this.startCountdown);
        }
      }, 1000);
    },
  },
};


  </script>
  