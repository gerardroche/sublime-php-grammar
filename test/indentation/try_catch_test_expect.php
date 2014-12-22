<?php

try {
    echo "Statement 1\n";
    throw new Exception("Message", 123);
} catch (Exception $e) {
    echo "Statement 1\n";
    echo "Statement 2\n";
} finally {
    echo "Statement 1\n";
    echo "Statement 2\n";
}

try
{
    echo "Statement 1\n";
    throw new Exception("Message", 123);
}
catch (Exception $e)
{
    echo "Statement 1\n";
    echo "Statement 2\n";
}
finally
{
    echo "Statement 1\n";
    echo "Statement 2\n";
}

// the throw statement should not increase or decrease indentation

throw new Exception;
throw new Exception();
throw new Exception("Message", 123);
echo "Statement\n";
