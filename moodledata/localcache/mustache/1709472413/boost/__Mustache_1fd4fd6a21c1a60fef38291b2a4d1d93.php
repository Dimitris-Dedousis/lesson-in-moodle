<?php

class __Mustache_1fd4fd6a21c1a60fef38291b2a4d1d93 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="chapter col-12 p-4">
';
        $buffer .= $indent . '    <div class="text-right">';
        $value = $this->resolveValue($context->find('printdialoglink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="text-center pb-5">';
        $value = $this->resolveValue($context->find('booktitle'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="chapter">
';
        $value = $context->find('parentchaptertitle');
        $buffer .= $this->section635dc77c10b729b101c0bc8f71d10aa2($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('chapter.content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section635dc77c10b729b101c0bc8f71d10aa2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
         <div class="text-center">
            {{{parentchaptertitle}}}
         </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '         <div class="text-center">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('parentchaptertitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '         </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
