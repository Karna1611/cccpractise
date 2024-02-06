<?php
    class View_Product
    {
        public function __construct()
        {

        }

        public function createForm()
        {
            $form='<form action="" method="POST">';
                $form.='<div>';
                    $form.=$this->createTextField('pdata[product_name]',"Product name: ");
                $form.='</div><br>';

                $form.='<div>';
                    $form.=$this->createNumberField('pdata[SKU]','SKU: ');
                $form.='</div><br>';

                $form.='<div>';
                    $form.=$this->createSpan("Product Type: ","product_type")."<br>";
                    $form.=$this->createRadioButton('pdata[product_type]',"Simple","simpleType")."<br>";
                    $form.=$this->createRadioButton('pdata[product_type]',"Bundle","bundleType");
                $form.='</div><br>';

                $form.='<div>';
                $form .= $this->createSelect('pdata[category]', "Category: ", ["--Select--", "Bar & Game Room", "Bedroom", "Decor", "Dining & Kitchen", "Lighting", "Living Room", "Mattresses", "Office", "Outdoor"], "category");
                $form .= '</div><br>';

                $form .= '<div>';
                $form .= $this->createNumberField('pdata[manu_cost]', "Manufacturer Cost: ", "", "manufacturerCost");
                $form .= '</div><br>';

                $form .= '<div>';
                $form .= $this->createNumberField('pdata[ship_cost]', "Shipping Cost: ", "", "shippingCost");
                $form .= '</div><br>';

                $form .= '<div>';
                $form .= $this->createNumberField('pdata[price]', "Price: ", "", "price");
                $form .= '</div><br>';

                $form .= '<div>';
                $form .= $this->createSelect('pdata[status]', "Status: ", ["--Select--", "Enabled", "Disabled"], "status");
                $form .= '</div><br>';

                $form .= '<div>';
                $form .= $this->createDateField('pdata[created_at]', "Created At: ", "createdAt");
                $form .= '</div><br>';

                $form .= '<div>';
                $form .= $this->createDateField('pdata[updated_at]', "Updated At: ", "updatedAt");
                $form .= '</div><br>';

                $form .= '<div>';
                $form .= $this->createSubmitBtn('Submit');
                $form .= '</div><br>';

                $form .= '</form>';
                return $form;    
        }

        public function createTextField($name,$title,$value='',$id='')
        {
            return '<span>'.$title.'</span><input id="'.$id.'"type="text" name='.$name.'"value="'.$value.'">';
        }

        public function createNumberField($name,$title,$value='',$id='')
        {
            return '<span>'.$title.'</span><input id="'.$id.'"type="number" name='.$name.'"value="'.$value.'">';
        }

        public function createSpan($title,$id="")
        {
            return '<span for="'.$id.'">'.$title.'</span>';
        }

        public function createRadioButton($name,$title,$id="")
        {
            return '<input id="' . $id . '" type="radio" name="' . $name . '"> <span for="' . $id . '" > ' . $title . ' </span>';
        }

        public function createSelect($name, $title, $categories, $id = '')
        {
            $var = '<span for="' . $id . '" > ' . $title . ' </span>';
            $var .= "<select id='" . $id . "' name='" . $name . "'>";
                foreach ($categories as $cat) {
                    $var .= '<option value="' . $cat . '">' . $cat . '</option>';
                }
        $var .= '</select>';
        return $var;
        }

        public function createDateField($name, $title, $id = '')
        {
            return '<span> ' . $title . ' </span><input id="' . $id . '" type="date" name="' . $name . '">';
        }

        public function createSubmitBtn($title)
        {
            return '<input type="submit" name="submit" value="' . $title . '">';
        }

        

        public function toHtml()
        {
            //echo "123";
            return $this->createForm();
        }

    }

?>