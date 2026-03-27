<?php
    system("cls");
    echo("Input an integer positive number:\r\n");
    $ulNumber = intval(chop(fgets(STDIN)));
    $nDividers = 0;
    printf("The number %lu has the folowing dividers:\r\n", $ulNumber);
    for ($i = 1; $i <= $ulNumber; $i++)
    {
        if($ulNumber % $i == 0)
        {
            printf("%lu ", $i);
            $nDividers++;
        }
    }
    echo("\r\n");
    switch ($nDividers)
    {
        case 0:
        case 1:
            printf("The number %d is neither composite nor prime\r\n", $ulNumber);
            break;
        case 2:
            printf("The number %d is prime\r\n", $ulNumber);
            break;
        default:
            printf("The number %d is composite\r\n", $ulNumber);
            break;
    }
    fgetc(STDIN);
?>