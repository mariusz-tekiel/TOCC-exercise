<?php
    //Function creating file order.csv which represents content of Entity "order"
    function orderFile(){
        $sfData = fopen('source_data.csv','r');
        $dfOrder = fopen('order.csv','w'); 

        while ($row = fgetcsv($sfData,10000,","," ")) { 
            $orderNumber = "";
            $orderNumber = str_replace("¦",",",$row[0]); 
            
            $customerNumber = "";
            $customerNumber = str_replace("¦",",",$row[2]); 
            
            $orderDate = "";
            $orderDate = str_replace("¦",",",$row[1]); 
        
            $current = "";
            $current .= $orderNumber.",".$customerNumber.",".$orderDate.","."\n"; 

        fwrite($dfOrder,$current);
        }    
        fclose($dfOrder);
        fclose($sfData); 
    };

    //Function creating file customer.csv which represents content of Entity "customer"
    function customerFile(){
        
        $sfData = fopen('source_data.csv','r');
        $dfCustomer = fopen('customer.csv','w'); 

        while ($row = fgetcsv($sfData,10000,","," ")) { 
            
            $customerNumber = "";
            $customerNumber = str_replace("¦",",",$row[2]); 
            
            $firstName = "";
            $firstName = str_replace("¦",",",$row[3]); 
        
            $familyName = "";
            $familyName = str_replace("¦",",",$row[4]); 
        
            $current = "";
            $current .= $customerNumber.",".$firstName.",".$familyName.","."\n"; 
            
        fwrite($dfCustomer,$current);
        } 
        
        fclose($dfCustomer);
    };
    
    //Function creating file item.csv which represents content of Entity "item"
    function itemFile(){
        
        $sfData = fopen('source_data.csv','r');
        $dfItem = fopen('item.csv','w'); 

        while ($row = fgetcsv($sfData,10000,","," ")) { 
            
            $itemNumber = "";
            $itemNumber = str_replace("¦",",",$row[5]); 
            
            $description = "";
            $description = str_replace("¦",",",$row[6]); 
        
            $cost = "";
            $cost = str_replace("¦",",",$row[7]); 
        
            $current = "";
            $current .= $itemNumber.",".$description.",".$cost.","."\n"; 
            
        fwrite($dfItem,$current);
        } 
        
        fclose($dfItem);
    };

    //Function creating file order_to_item.csv which represents content of Entity "order_to_item"
    function orderToItemFile(){
        
        $sfData = fopen('source_data.csv','r');
        $sfOrderToItem = fopen('order_to_item.csv','w'); 

        while ($row = fgetcsv($sfData,10000,","," ")) { 
                                    
            $orderNumber = "";
            $orderNumber = str_replace("¦",",",$row[0]); 
        
            $itemNumber = "";
            $itemNumber = str_replace("¦",",",$row[5]); 
        
            $current = "";
            $current .= $orderNumber.",".$itemNumber.","."\n"; 
            
        fwrite($sfOrderToItem,$current);
        } 
        
        fclose($sfOrderToItem);
    };

    orderFile();
    customerFile();    
    itemFile();
    orderToItemFile();


