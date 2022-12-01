let cartitem = localStorage.getItem("productsInCart");
let total = localStorage.getItem("totalCost");

        cartitem = JSON.parse(cartitem);

        
        
        let productContainer = document.querySelector(".CartContainer");

        if(cartitem && productContainer && total) {
            productContainer.innerHTML = `

            <div class="Header">
                   <h3 class="Heading">Shopping Cart</h3>
                   <h5 class="Action">Remove all</h5>
               </div>


               <div class="checkout">
             <div class="total">
                 <div>
                     <div class="Subtotal">Sub-Total</div>
                     <div class="items">All item</div>
                 </div>
                 <div class="total-amount">${total} RM</div>
             </div>

             <button name=btnorder id=btnorder class="button">Checkout</button></div>
            
            `;


            Object.values(cartitem).map(item =>{
                productContainer.innerHTML += `

                <div class="Cart-Items">
                
                <div class="image-box">
                         <img src="./Images/${item.tag}.png"></img>
                     </div>


                     <div class="about">
                         <h1 class="title">${item.name}</h1>
                         <h3 class="subtitle">1 Box (250 gm) </h3>
                     </div>


                     <div class="counter">
                         <div class="count">${item.inCart}</div>
                     </div>
                     <div class="prices">
                         <div style="padding-top: 20px; font-size: 26px; font-family: 'Open Sans'; font-weight: 800; color: #202020;" id = "test">${parseInt(item.price) * parseInt(item.inCart)} RM </div>
                         <div class="remove"><u1>Remove</u1></div>
                         <div class="save"><u>${item.tag}</u></div>
                     </div>

                     </div>



                    `
                


            }); 
            // end if loop 


        
        
        
        
        }


        else {

            productContainer.innerHTML = ` 
            <div class='Header'>
            <h3 class='Heading'>Your cart is empty add items in our shopping page : )</h3>
            </div> `
            

            

        }


        

   //------------------------------------------------------------------------------------------------------------
   

        
        // removes all items 

        let removeall = document.querySelector(".Action");
      
        removeall.addEventListener('click' ,(e)=>{ 
         localStorage.clear();
         location.reload();
        })

        //------------------------------------------------------

        //removes ones item

        // get the tag name 

         var tagname = document.getElementsByTagName('u')

        let removeone = document.getElementsByTagName('u1');
        
        // if totalamount is null then
        let totalamount = document.getElementById('test');
        if( total == 0 ) { localStorage.clear();
                    location.reload(); }
        //--------------------------------------------------            

        for(let i=0; i< removeone.length; i++) {
            
            removeone[i].addEventListener('click' ,(e)=>{ 
                
                // getting object values 

                let storeprices = Object.values(cartitem);
                let cost = storeprices[i].price;
                let incartt = storeprices[i].inCart

                delete cartitem[tagname[i].innerHTML];
                console.log(tagname[i].innerHTML)
                localStorage.setItem('productsInCart',JSON.stringify(cartitem))


                // subtracting the from total amount

                let cn = localStorage.getItem('totalCost');
                cn = parseInt(cn) ;
                cost = parseInt(cost);
                incartt = parseInt(incartt);   
                let cn1 = cn -  (incartt * cost);


                localStorage.setItem('totalCost',cn1)

                let totalcc = localStorage.getItem('totalCost')
                totalcc = parseInt(totalcc)




                location.reload();
        })

        }


        //---------------------------------------------------------------------------


        // the ajax post method---------------------------------------------------------------------------

        

        let btnorder = document.getElementById('btnorder');

        
        btnorder.addEventListener('click',(e)=> {


           let orderitem = Object.values(cartitem);
           let cn = localStorage.getItem('totalCost');


          for(let i=0; i< removeone.length; i++) {

            odritemarray = [];
            odritemarray.push(orderitem[i])

            $.ajax({

                url:"OrderProcess.php",
                method :"post",
                data: {items: JSON.stringify(odritemarray),totalcost: cn},

                success: function(res) {
                console.log(res);
                }

            }) 

        }

        alert("Order placed successfully");
        localStorage.clear();

        location.reload();
             


        })
