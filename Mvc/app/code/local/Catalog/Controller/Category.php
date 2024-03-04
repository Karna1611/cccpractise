<?php 
class Catalog_Controller_Category extends Core_Controller_Front_Action {

    // protected   $_addToCart = [];
    public function viewAction()
    {
        $this->setFormCss("view");
        $layout = $this->getLayout();
        $child = $layout->getchild('content'); //core_block_layout
        $productForm = $layout->createBlock('catalog/admin_category_list');
        $child->addChild('list',$productForm);
        $layout->toHtml();
    }

    public function linkAction() {
        $productId = $this->getRequest()->getQueryData('id'); // Get the product ID from the GET parameter
    
        // Check if product ID is valid (you may need additional validation)
        if (!empty($productId)) {
            // Assuming addToCart() is a method in your application to add the product to cart
            $this->addToCart($productId);
            echo "Product with ID $productId added to cart successfully.";
        } else {
            echo "Invalid product ID.";
        }
    }
    
    // Function to add product to cart
    private function addToCart($productId) {
        // Retrieve cart data from persistent storage
        $cartData = $this->getCartData();
    
        // Add the product to cart
        if (isset($cartData[$productId])) {
            $cartData[$productId]['quantity'] += 1; // Increment quantity if product already exists
        } else {
            $cartData[$productId] = array(
                'id' => $productId,
                'quantity' => 1 // Assuming default quantity is 1
            );
        }
    
        // Save updated cart data back to persistent storage
        $this->saveCartData($cartData);
    }
    
    // Function to retrieve cart data from persistent storage
    private function getCartData() {
        // This is a simplified example; you should replace this with your actual database or storage retrieval logic
        // For demonstration purposes, we use a simple array
        if (file_exists('cart_data.json')) {
            $cartData = json_decode(file_get_contents('cart_data.json'), true);
        } else {
            $cartData = array();
        }
        return $cartData;
    }
    
    // Function to save cart data to persistent storage
    private function saveCartData($cartData) {
        // This is a simplified example; you should replace this with your actual database or storage saving logic
        // For demonstration purposes, we use a simple JSON file
        file_put_contents('cart_data.json', json_encode($cartData));
    }

    public function removeAction() {
        $productId = $this->getRequest()->getQueryData('id'); // Get the product ID from the URL parameter
    
        // Check if product ID is valid (you may need additional validation)
        if (!empty($productId)) {
            // Remove the product from the cart
            $this->removeFromCart($productId);
            echo "Product with ID $productId removed from cart successfully.";
            // Redirect back to the previous page or wherever you want
            // header('Location: previous_page.php');
            exit; // Stop further execution
        } else {
            echo "Invalid product ID.";
        }
    }
    
    // Function to remove product from cart
    private function removeFromCart($productId) {
        // Retrieve cart data from persistent storage
        $cartData = $this->getCartData();
    
        // Check if the product exists in the cart
        if (isset($cartData[$productId])) {
            // Remove the product from the cart
            unset($cartData[$productId]);
    
            // Save the updated cart data back to persistent storage
            $this->saveCartData($cartData);
        }
    }

    public function postdataAction() {  
        // Retrieve cart data from persistent storage
        $cartData = $this->getCartData();
        
        // Get the product ID from the request
        $productId = $this->getRequest()->getQueryData('id');
        
        // Check if the product ID is valid and exists in the cart
        if (!empty($productId) && isset($cartData[$productId])) {
            // Display product information for the specified product
            $product = $cartData[$productId];
            echo '<h2>Product Details</h2>';
            echo 'Product ID: ' . $productId . '<br>';
            echo 'Quantity: ' . $product['quantity'] . '<br>';
            // You can display other product details here as needed
        } else {
            echo '<h2>Product Not Found in Cart</h2>';
        }
    }
    
    
    

    // function getCartData() {
    //     // This is a simplified example; you should replace this with your actual mechanism to retrieve cart data
    //     // For demonstration purposes, we use a simple JSON file
    //     if (file_exists('cart_data.json')) {
    //         $cartData = json_decode(file_get_contents('cart_data.json'), true);
    //     } else {
    //         $cartData = array();
    //     }
    //     return $cartData;
    // }
    
}
?>