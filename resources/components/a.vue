<template>
    <!-- <head> hora ds</head> -->
      <h3>{{ hora }}</h3>
  </template>
  
  <script>
  // function countdown() {
  //   let hours = 1;
  //   let minutes = 30;
  //   let seconds = 0;
  
  //   const interval = setInterval(() => {
  //     if (hours === 0 && minutes === 0 && seconds === 0) {
  //       clearInterval(interval);
  //     } else {
  //       if (minutes === 0 && seconds === 0) {
  //         hours--;
  //         minutes = 59;
  //         seconds = 59;
  //       } else if (seconds === 0) {
  //         minutes--;
  //         seconds = 59;
  //       } else {
  //         seconds--;
  //       }
  
  //     //   console.log(`${hours}:${minutes}:${seconds}`);
  //     }
  //   }, 1000);
  // }
  // return {
  //             hora:"sdad",
  //         };
  // countdown();
  
  export default {
      data(){
          return {
              // hora:""+hours+"",
              hora:"dfa",
          };
      },
      methods:{
          // function countdown() {
          countdown() {
          let hours = 1;
          let minutes = 30;
          let seconds = 0;
  
          const interval = setInterval(() => {
              if (hours === 0 && minutes === 0 && seconds === 0) {
              clearInterval(interval);
              } else {
              if (minutes === 0 && seconds === 0) {
                  hours--;
                  minutes = 59;
                  seconds = 59;
              } else if (seconds === 0) {
                  minutes--;
                  seconds = 59;
              } else {
                  seconds--;
              }
  
              //   console.log(`${hours}:${minutes}:${seconds}`);
              }
          }, 1000);
          }
      countdown();
  
      }
  
  };
  </script>
  
  <style>
  
  </style>