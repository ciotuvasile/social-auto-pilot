<?php
// Heading
$_['heading_title']                    = 'Template';

// Text
$_['text_success']                     = 'Success: You have modified Template!';
$_['text_list']                        = 'Template List';
$_['text_add']                         = 'Add Template';
$_['text_edit']                        = 'Edit Template';
$_['text_default']                     = 'Default';

// Column
$_['column_name']                      = 'Name';
$_['column_channel']                   = 'Channel';
$_['column_category']                  = 'Category';
$_['column_title']                     = 'Title';
$_['column_status']	                  = 'Status';
$_['column_default']	                  = 'Default';
$_['column_date_added']	               = 'Date Added';
$_['column_date_modified']	            = 'Date Modified';
$_['column_action']                    = 'Action';

// Entry
$_['entry_name']                       = 'Name';
$_['entry_message']                    = 'Message';
$_['entry_channel']                    = 'Channel';
$_['entry_category']                   = 'Category';
$_['entry_status']                     = 'Status';
$_['entry_default']                    = 'Default';
$_['entry_date_added']                 = 'Date Added';
$_['entry_date_modified']              = 'Date Modified';

// Help
$_['help_channel']                     = 'Select Social Network (channel) where you plan to use this message template';
$_['help_category']                    = 'E.g: If is selected category \'Product\' then this message template is used when new products is added or edited';
$_['help_name']                        = 'Used only to help you to identify message templates in list';
$_['help_special_keyword']             = 'SPECIAL KEYWORDS';
$_['help_product_special_keyword']     = '{product.name} = product name<br />{product.model} = product model<br />{product.price} = product price (price special if product has special price assigned)<br />{product.price.new} = special price (available only when product has special price)<br />{product.price.old} = regular price (when product has special price assigned)<br />{product.discount.amount} = discount amount (eg. $30 - when product has special price)<br />{product.discount.percent} = discount percent (when special price available)<br />{product.quantity} = product quantity (quantity in stock)<br />{product.url} = product page link (URL)<br /><br />CONDITIONAL:<br /><strong>[if.discount.yes] something here [endif.discount.yes]</strong><br /><br />E.g.: {product.name} - {product.price} [if.discount.yes] (old price {product.price.old})[endif.discount.yes]<br/>will produce result iPhone Silver 32GB - $500 (old price $699.99)';
$_['help_review_special_keyword']      = '{review.author} = review author<br />{review.text} = review message<br />{review.rating} = rating as number<br />{review.rating.stars} = rating as stars<br />{review.date_added} = review date added';
$_['help_category_special_keyword']    = '{category.name} = category name<br />{category.url} = category link (URL)';
$_['help_information_special_keyword'] = '{information.title} = Information page title<br />{information.url} = information page link (URL)';

// Error
$_['error_warning']                    = 'Warning: Please check the form carefully for errors!';
$_['error_permission']                 = 'Warning: You do not have permission to modify Templates!';
$_['error_name']                       = 'Name must be between 3 and 64 characters!';
$_['error_message']                    = 'Message must be more than 3 characters!';
$_['error_default_first']              = 'Template is first one in category - set it as Default!';
$_['error_default_change']             = 'Template was previously set as default for this category! If you want to change default template for this category then in templates list identify template you want to use as default > edit > set Default: YES. Operation described will also set this template as non-default.';
$_['error_status']                     = 'If option Default = YES then Status should be set to Enabled!';
$_['error_default_delete']             = 'Warning: Templates marked as default cannot be deleted! Please uncheck default templates and use again Delete option.';
