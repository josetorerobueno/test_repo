<?php

    interface iQuestion {      
        
        
        public function __construct(iPlugin $plugin, LimesurveyApi $api, $questionId = null, $responseId = null);
        
        /**
         * Function that returns meta data for the available attributes
         * for the question type.
         * 
         */
        public function getAttributes($language = null);
        
        /**
         * Returns the number of question this question contains.
         * Defaults to 1, can be set to 0 if this question should not be counted
         * like in case for display only or equation questions.
         * @return int 
         */
        public function getCount();
        
        /**
         * This function derives a unique identifier for identifying a question type.
         */
        public static function getGUID();
        
        /**
         * @param Twig_Environment $twig A reference to configured Twig Environment.
         * This Twig environment will have a correctly configured translation environment.
         * This Twig environment will have the plugin view path configured in its loader.
         * @param bool $return If true, return the content instead of outputting it.
         */
        public function render($name, $language, $return = false);
        
        
        /**
         * This function must save the custom question attributes for a question.
         * The default implementation just iterates over the array and saves each property.
         * @param $attributes A array containing the value for each attribute filled in.
         * @return boolean True on success, false on failure(s).
         */
        public function saveAttributes(array $attributes, $qid = null);
        
        
        
    }
?>
