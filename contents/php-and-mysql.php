<?php

$php_and_mysql_data = [
  'heading' => 'PHP and MySQL - Server-Side Web Development',
  'sections' => [
    'section-a' => [
      [
        'title' => 'Intro',
        'folder_name' => 'intro',
        'pages' => [
          'echo.php',
          'comments.php',
        ],
      ],
      [
        'title' => 'Chapter 1: Variables, Expressions and Operators',
        'folder_name' => 'c01',
        'pages' => [
          'arithmetic-operators.php',
          'associative-arrays.php',
          'comparison-operators.php',
          'echo-shorthand.php',
          'example.php',
          'indexed-arrays.php',
          'logical-operators.php',
          'multidimensional-arrays.php',
          'string-operator.php',
          'updating-arrays.php',
          'updating-variables.php',
          'variables.php',
        ],
      ],
      [
        'title' => 'Chapter 2: Control Structures',
        'folder_name' => 'c02',
        'pages' => [
          'do-while-loop.php',
          'example.php',
          'for-loop-higher-counter.php',
          'for-loop.php',
          'foreach-loop-just-accessing-values.php',
          'foreach-loop.php',
          'if-else-if-statement.php',
          'if-else-statement.php',
          'if-statement.php',
          'include-and-require-files.php',
          'match.php',
          'switch-statement.php',
          'ternary-operator.php',
          'while-loop.php',
        ],
      ],
      [
        'title' => 'Chapter 3: Functions',
        'folder_name' => 'c03',
        'pages' => [
          'basic-function.php',
          'functions-with-return-values.php',
          'function-with-parameters.php',
          'global-and-local-scope.php',
          'global-and-static-variables.php',
          'functions-with-multiple-values.php',
          'type-declarations.php',
          'strict-types.php',
          'multiple-return-statements.php',
          'default-values-for-paramters.php',
          'named-arguments-in-php-8.php',
          'example.php',
        ],
      ],
      [
        'title' => 'Chapter 4: Objects & Classes',
        'folder_name' => 'c04',
        'pages' => [
          'objects-and-properties.php',
          'objects-and-methods.php',
          'constructor-methods.php',
          'getters-and-setters.php',
          'array-in-object.php',
          'object-in-object.php',
          'example.php',
        ],
      ],
    ],
    'section-b' => [
      [
        'title' => 'Intro',
        'folder_name' => 'intro',
        'pages' => [],
      ],
    ],
  ],
];

function get_php_and_mysql_heading($heading_string)
{
  return '<h1>' . $heading_string . '</h1>';
}

function get_section_name_heading($section_name)
{
  return '<h2>' . format_dashed_case_to_sentence($section_name) . '</h2>';
}

function get_section_content_heading($section_content_name)
{
  return '<h3>' . $section_content_name . '</h3>';
}

function get_page_list($url, $pages)
{
  $html_content = '';

  foreach ($pages as $page) {
    $link_url = $url . '/' . $page;
    $text = format_dashed_case_to_sentence($page);

    $html_content .= '<li>';
    $html_content .= "<a target=\"_blank\" href=\"$link_url\">$text</a>";
    $html_content .= '</li>';
  }

  return $html_content;
}

function get_section_contents($base_url, $section_contents)
{
  $html_content = '';

  foreach ($section_contents as $contents) {
    $base_url_with_folder_name = $base_url . '/';

    foreach ($contents as $key => $value) {
      if ($key === 'title') {
        $html_content .= get_section_content_heading($value);
      }

      if ($key === 'folder_name') {
        $base_url_with_folder_name .= $value;
      }

      if ($key === 'pages') {
        $html_content .= '<ul>';
        $html_content .= get_page_list($base_url_with_folder_name, $value);
        $html_content .= '</ul>';
      }
    }
  }

  return $html_content;
}

function get_php_and_mysql_sections($base_url, $sections)
{
  $html_content = '';
  $base_url_with_section_name = $base_url . '/';

  foreach ($sections as $section_name => $section_contents) {
    $base_url_with_section_name .= $section_name;

    $html_content .= get_section_name_heading($section_name);
    $html_content .= get_section_contents($base_url_with_section_name, $section_contents);
  }

  return $html_content;
}

function get_php_and_mysql_contents($base_url, $php_and_mysql_data)
{
  $html_content = '';

  foreach ($php_and_mysql_data as $key => $value) {
    if ($key === 'heading') {
      $html_content .= get_php_and_mysql_heading($value);
    }

    if ($key === 'sections') {
      $html_content .= get_php_and_mysql_sections($base_url, $value);
    }
  }

  return $html_content;
}
