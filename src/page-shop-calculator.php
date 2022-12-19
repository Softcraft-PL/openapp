<?php /* Template Name: Kalkulator */ ?>

<?php get_header(); ?>

<header class="py-32 mt-[-6rem] pt-[15.625rem] xl:pt-[14rem] relative">
    <div class="absolute h-full max-h-[500px] w-full top-0" style="background: linear-gradient(to top, rgb(255, 255, 255) 0%,rgba(255,255,255,0) 70%);"></div>
    <div class="absolute h-full max-h-[500px] w-full top-0 z-[-1]" style="background-image: linear-gradient(to left top,#62ffff,#00ebff,#00d5ff,#00bdff,#00a3ff,#6599ff,#958df7,#bb7fe8,#dd8dd9,#f0a0d0,#f8b7ce,#f9cfd5);"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-8 flex flex-col justify-center">
                <h1 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo get_field('calculator_header_title') ?></h1>
                <p class="text-2xl lg:text-3xl font-light"><?php echo get_field('calculator_header_description') ?></p>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="calculator font-light pb-20 lg:pb-32">
        <div class="container mx-auto p-4 sm:p-12 bg-[#F9F9F9] rounded-xl">
            <div class="grid">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 lg:col-span-6 pr-0 lg:pr-2 xl:pr-4 2xl:pr-10">
                        <h2 class="text-lg text-primary font-bold min-h-[52px] flex items-center mb-2">Aktualne dane sklepu</h2>
                        <p class="text-md mb-8 min-h-[43px]">Wprowadź parametry swojego sklepu, aby oszacować korzyści z wdrożenia checkoutu OpenApp</p>

                        <div class="flex items-center xl:mt-[107px] mb-8 xl:mb-[43px]">
                            <label for="orders" class="text-md">Miesięczna liczba zamówień</label>
                            <input type="text" class="calculator__input text-md" id="input-0" value="10000">
                            <span class="w-[24px] ml-2">szt.</span>
                        </div>

                        <div class="form-group row" style="visibility: hidden; height: 0;">
                           <label for="staticEmail" class="col-sm-8 col-form-label"></label>
                           <div class="col-sm-4">
                              <input type="number" class="form-control-plaintext" id="input-99" value="10000">
                           </div>
                        </div>

                        <div class="flex items-center mb-8 hidden">
                            <label for="cart" class="text-md">Średnia wartość koszyka</label>
                            <input type="text" class="calculator__input text-md" id="input-1" value="250">
                            <span class="w-[24px] ml-2">zł</span>
                        </div>

                        <div class="form-group row" style="visibility: hidden; height: 0;">
                          <label for="staticEmail" class="col-sm-8 col-form-label"></label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control-plaintext" id="input-99" value="10000">
                          </div>
                        </div>

                        <div class="flex items-center mb-8">
                            <label for="orders" class="text-md">Średnia miesięczna marża</label>
                            <input type="text" class="calculator__input text-md" id="input-2" value="30">
                            <span class="w-[24px] ml-2">%</span>
                        </div>



                        <div class="flex items-center mb-8 hidden">
                            <label for="cart" class="text-md">Średnia prowizja za płatność</label>
                            <input type="text" class="calculator__input text-md" id="input-3" value="1.15">
                            <span class="w-[24px] ml-2">%</span>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 lg: pl-0 lg:pl-2 xl:pl-4 xxl:pl-10">
                        <h3 class="text-lg text-primary font-bold min-h-[52px] flex items-center mb-2">Założenia dotyczące sprzedaży z wykorzystaniem OpenApp</h3>
                        <p class="text-md mb-8 min-h-[43px]">Możesz dowolnie zmieniać poniższe dane, aby zobaczyć różne scenariusze.</p>

                        <div class="flex items-center mb-8">
                            <label for="orders" class="text-md">Wzrost konwersji</label>
                            <input type="text" class="calculator__input text-md text-white font-bold bg-primary" id="input-7" value="20">
                            <span class="w-[24px] ml-2">%</span>
                        </div>



                        <div class="flex items-center mb-8">
                            <label for="cart" class="text-md font-weight-700">Miesięczna liczba zamówień z uwzględnieniem wpisanego powyżej wzrostu konwersji</label>
                            <input disabled type="text" class="calculator__input text-md font-bold" id="input-12" value="10232" readonly disabled>
                            <span class="w-[24px] ml-2">szt.</span>
                        </div>



                        <div class="flex items-center mb-8 hidden">
                            <label for="orders" class="text-md">Wzrost wartości koszyka</label>
                            <input type="text" class="calculator__input text-md" id="input-8" value="0">
                            <span class="w-[24px] ml-2">%</span>
                        </div>



                        <div class="flex items-center mb-8 hidden">
                            <label for="cart" class="text-md font-weight-700">Średnia wartość koszyka po wdrożeniu OpenApp</label>
                            <input disabled type="text" class="calculator__input text-md font-bold" id="input-13" value="200" readonly disabled>
                            <span class="w-[24px] ml-2">5 zł</span>
                        </div>



                        <div class="flex items-center mb-8">
                            <label for="orders" class="text-md">Udział transakcji OpenApp w całkowitej sprzedaży</label>
                            <input type="text" class="calculator__input text-md" id="input-10" value="30">
                            <span class="w-[24px] ml-2">%</span>
                        </div>



                        <div class="flex items-center mb-8 hidden">
                            <label for="cart" class="text-md font-weight-700">Średnia prowizja za płatność z uwzględnieniem prowizji OpenApp</label>
                            <input disabled type="text" class="calculator__input text-md font-bold" id="input-11" value="0.49" readonly disabled>
                            <span class="w-[24px] ml-2">%</span>
                        </div>

                        <input type="submit" class="btn btn--primary block mt-10 ml-auto button-submit" value="Przelicz">
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <h2 class="text-lg text-primary font-bold my-10">Wyniki szczegółowe</h2>

                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12 xl:col-span-6">
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-4">
                                        <div class="text-center font-bold">
                                            Obecnie
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <div class="text-center font-bold">
                                            Po wdrożeniu OpenApp
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <div class="text-center font-bold">
                                            Zmiana
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="calculator__line"></div>

                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="col-span-3">
                                    <label for="cart" class="text-md width-500">Wartość sprzedaży miesięcznie</label>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-4">
                                        <div class="text-center">
                                            <input disabled id="result-1" type="text" value="" class="calculator__input font-light text-center text-md">
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <div class="text-center">
                                            <input disabled id="result-5" type="text" value="" class="calculator__input font-light text-center text-md">
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <div class="text-center">
                                            <input disabled id="result-9" type="text" value="" class="calculator__input text-primary text-center font-bold text-md">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="calculator__line calculator__line--dotted mt-4"></div>

                        <div class="grid grid-cols-12 gap-4 hidden">
                            <div class="col-span-12 xl:col-span-6">
                                <label for="cart" class="text-md width-500">Marża sklepu po koszcie płatności i transakcji (w tym OpenApp)</label>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-4">
                                        <div class="text-center">
                                            <input disabled id="result-2" type="text" value="" class="calculator__input text-center text-md font-weight-700">
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <div class="text-center">
                                            <input disabled id="result-6" type="text" value="" class="calculator__input text-center text-md font-weight-700">
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <div class="text-center">
                                            <input disabled id="result-10" type="text" value="" class="calculator__input text-primary text-center font-bold text-md">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-20 lg:pb-32">
        <?php get_template_part("template-parts/shop-upper-footer"); ?>
    </section>
</main>

<script type="text/javascript">
  
  (function() {
    
    const selectElement = document.querySelector('.button-submit');
    
    selectElement.addEventListener('click', (event) => {
     calc();
    });
      
    calc();
      
  })();
 
  
    function numberWithCommas(x) {
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
      
    function calc() {
      
      
      const input0 = document.getElementById('input-0');
      const input1 = document.getElementById('input-1');
      const input2 = document.getElementById('input-2');
      const input3 = document.getElementById('input-3');
      //const input4 = document.getElementById('input-4');
      //const input5 = document.getElementById('input-5');
      const input6 = document.getElementById('input-6');
      const input7 = document.getElementById('input-7');
      const input8 = document.getElementById('input-8');
      //const input9 = document.getElementById('input-9');
      const input10 = document.getElementById('input-10');
      const input11 = document.getElementById('input-11');
      const input12 = document.getElementById('input-12');
      const input13 = document.getElementById('input-13');

      
      const result1 = document.getElementById('result-1');
      const result2 = document.getElementById('result-2');
      //const result3 = document.getElementById('result-3');
      const result4 = document.getElementById('result-4');
      const result5 = document.getElementById('result-5');
      const result6 = document.getElementById('result-6');
      //const result7 = document.getElementById('result-7');
      const result8 = document.getElementById('result-8');
      const result9 = document.getElementById('result-9');
      const result10 = document.getElementById('result-10');
      //const result11 = document.getElementById('result-11');
      const result12 = document.getElementById('result-12');
      const result13 = document.getElementById('result-13');
      const result14 = document.getElementById('result-14');

      const value0 = parseFloat(input0.value);
      const value1 = parseFloat(input1.value);
      const value2 = parseFloat(input2.value);
      const value3 = input3.value;
      const value4 = parseFloat(100);
      const value5 = parseFloat(0);
      let value6 = parseFloat(value4);
      const value7 = parseFloat(input7.value);
      const value8 = parseFloat(input8.value);
      const value9 = parseFloat(0);
      const value10 = parseFloat(input10.value);
      let value11 = parseFloat(input11.value);
      let value12 = parseFloat(input12.value);

      /*
      if (value7 > 20) {
         value11 = input11.value = 2.2;
      } else if (value7 <= 20 && value7 > 15) {
         value11 = input11.value = 1.8;
      } else if (value7 <= 15 && value7 > 10) {
         value11 = input11.value = 1.4;
      } else if (value7 <= 10 && value7 > 5) {
         value11 = input11.value = 1;
      } else if (value7 <= 5) {
         value11 = input11.value = 0.6;
      }
      */
       
      value6 = value0;
      
      const actualSales = parseInt((value6 * value1 * parseFloat(value4 / 100)));
      const returnsValue = parseInt(actualSales * parseFloat(value5 / 100));
      const baseMargin = parseInt(actualSales * parseFloat(value2 / 100));
      const paymentCost = parseInt(actualSales * parseFloat(value3 / 100));
      
      const cartWithOA = Math.round(value1 + (value1 * parseFloat(value8 / 100)));
  
      const OAConversion = (value4 + value4 * parseFloat(value7 / 100));
      
      const actualSalesWithOA = parseInt(parseInt(value6) * parseFloat(value10 / 100) * parseFloat(OAConversion / 100) * cartWithOA);
      
      const regularCheckoutSales = parseInt(value6 * (1 - parseFloat(value10 / 100)) * parseFloat(value4 / 100) * value1);
      
      const actualSalesWithOA2 = regularCheckoutSales + actualSalesWithOA;
      const baseMarginWithOA = actualSalesWithOA2 * (value2 / 100);
      const paymentCostWithOA = actualSalesWithOA2 * (value3 / 100);
      
      const OASales = parseInt(value6 * (parseFloat(value10 / 100)) * parseFloat(OAConversion / 100) * cartWithOA);
      
      const OARateOfReturn = parseFloat(value5 / 100) + parseFloat(value5/ 100) * parseFloat(value9 / 100);

      const returnsWithOA = OASales * parseFloat(OARateOfReturn / 100);
      
      const returnsValue2 = (actualSalesWithOA2 * (returnsWithOA / 100));
      const OAPaymentCost = parseInt(actualSalesWithOA2 * (value11 / 100));
      const regularSalesMargin = regularCheckoutSales * parseFloat(value2 / 100);
      const paymentCost2 = parseInt(regularCheckoutSales * parseFloat(value3 / 100));
      const regularSalesNetMargin = parseInt(regularSalesMargin - paymentCost2);
      const actualMargin = (actualSales - returnsValue) * parseFloat(value2 / 100);
      
      const actualMarginWithOA = (OASales - (OASales * OARateOfReturn)) * parseFloat(value2 / 100);
      
      const actualMarginWithOARegular = (regularCheckoutSales - (regularCheckoutSales * parseFloat(value5 / 100))) * parseFloat(value2 / 100);

      const r1 = actualSales;
      const r2 = baseMargin - paymentCost;
      const r3 = actualSales - returnsValue;
      const r4 = actualMargin - paymentCost;
      const r5 = regularCheckoutSales + actualSalesWithOA;
      
      const OAMargin = parseInt(OASales * parseFloat(value2 / 100));
      const paymentCheckoutCost = parseInt(OASales * parseFloat(value11 / 100));
      const OANetMargin = parseInt(OAMargin - paymentCheckoutCost);
      
      const paymentCostTotal = paymentCheckoutCost + paymentCost2;
      
      value12 = parseInt(value0 * parseFloat(OAConversion / 100));
      input12.value = numberWithCommas(parseInt(value0 + ((value12 - value0) * parseFloat(value10 / 100))));
      input13.value = cartWithOA;
      
      /*
      
      console.log('Koszyki:', value6, parseFloat(value10 / 100));
      console.log('FEE:', value11);
      console.log('actualSales:', actualSales);
      console.log('baseMargin:', baseMargin);
      console.log('returnsValue:', returnsValue);
      console.log('returnsValueCOST:', returnsValue * parseFloat(value3 / 100));
      console.log('actualSalesWithOA:', actualSalesWithOA);
      console.log('actualMargin:', actualMargin);
      console.log('returnsWithOA:', returnsWithOA);
      console.log('OARateOfReturn:', OARateOfReturn);
      console.log('actualMarginWithOA:', actualMarginWithOA);
      console.log('actualMarginWithOARegular:', actualMarginWithOARegular);
      console.log('Orders with OA:', value12);

     
      console.log('paymentCost:', paymentCost);
      console.log('regularCheckoutSales:', regularCheckoutSales);
      console.log('cartWithOA:', cartWithOA);
      console.log('OAConversion:', OAConversion);


      console.log('OASales:', OASales);
      console.log('OAMargin:', OAMargin);
      console.log('paymentCheckoutCost:', paymentCheckoutCost);
      console.log('OANetMargin:', OANetMargin);
      console.log('regularSalesMargin:', regularSalesMargin);
      console.log('paymentCost2:', paymentCost2);
      console.log('regularSalesNetMargin:', regularSalesNetMargin);
      console.log('paymentCostTotal:', paymentCostTotal);
      console.log('actualMarginWithOA:', actualMarginWithOA);
      
      */
      
      const r6 = OANetMargin + regularSalesNetMargin;

      const r7 = (regularCheckoutSales - (regularCheckoutSales * parseFloat(value5 / 100))) + (OASales - (OASales * OARateOfReturn));
      
            const r8 = actualMarginWithOARegular + actualMarginWithOA - paymentCostTotal;
      const r11 = ((((r7) * 100) / r3) - 100);
      const r12 = (((r8) * 100) / r4) - 100;
      
      result1.value = numberWithCommas(r1.toFixed(0)) + ' zł';
      result2.value = numberWithCommas((r2).toFixed(0)) + ' zł';
      //result3.innerText = numberWithCommas((r3).toFixed(0)) + ' zł';
      //result4.innerText = numberWithCommas((r4).toFixed(0)) + ' zł';
      result5.value = numberWithCommas((r5).toFixed(0)) + ' zł';
      result6.value = numberWithCommas((r6).toFixed(0)) + ' zł';
      //result7.innerText = numberWithCommas((r7).toFixed(0)) + ' zł';
      //result8.innerText = numberWithCommas((r8).toFixed(0)) + ' zł';
      
      result9.value = ((((r5) * 100) / r1) - 100).toFixed(2) + '%';
      result10.value = ((((r6) * 100) / r2) - 100).toFixed(2) + '%';
      
      //result11.innerText = r11.toFixed(2) + '%';
      //result12.innerText = r12.toFixed(2) + '%';
      
      //result13.innerText =  r11.toFixed(2) + '%';
      //result14.innerText = r12.toFixed(2) + '%';
      

      

     
   }
  
</script>

<?php get_footer(); ?>
