<?php

/**
 * Div formatter
 */
class sfWidgetFormSchemaFormatterDiv extends sfWidgetFormSchemaFormatter 
{
  protected
    $rowFormat = '<p>%error%%label%%field%%help%%hidden_fields%</p>',
    $helpFormat = '<span class="help">%help%</span>';
}