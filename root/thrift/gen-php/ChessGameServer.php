<?php
/**
 * Autogenerated by Thrift Compiler (0.8.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
include_once $GLOBALS['THRIFT_ROOT'].'/Thrift.php';

include_once 'ChessGameServer_types.php';

interface ChessGameServerIf {
  public function startgame($whiteAlgorithm, $blackAlgorithm);
}

class ChessGameServerClient implements ChessGameServerIf {
  protected $input_ = null;
  protected $output_ = null;

  protected $seqid_ = 0;

  public function __construct($input, $output=null) {
    $this->input_ = $input;
    $this->output_ = $output ? $output : $input;
  }

  public function startgame($whiteAlgorithm, $blackAlgorithm)
  {
    $this->send_startgame($whiteAlgorithm, $blackAlgorithm);
    $this->recv_startgame();
  }

  public function send_startgame($whiteAlgorithm, $blackAlgorithm)
  {
    $args = new ChessGameServer_startgame_args();
    $args->whiteAlgorithm = $whiteAlgorithm;
    $args->blackAlgorithm = $blackAlgorithm;
    $bin_accel = ($this->output_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'startgame', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('startgame', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_startgame()
  {
    $bin_accel = ($this->input_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, 'ChessGameServer_startgame_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new ChessGameServer_startgame_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    return;
  }

}

// HELPER FUNCTIONS AND STRUCTURES

class ChessGameServer_startgame_args {
  static $_TSPEC;

  public $whiteAlgorithm = null;
  public $blackAlgorithm = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'whiteAlgorithm',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'blackAlgorithm',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['whiteAlgorithm'])) {
        $this->whiteAlgorithm = $vals['whiteAlgorithm'];
      }
      if (isset($vals['blackAlgorithm'])) {
        $this->blackAlgorithm = $vals['blackAlgorithm'];
      }
    }
  }

  public function getName() {
    return 'ChessGameServer_startgame_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->whiteAlgorithm);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->blackAlgorithm);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ChessGameServer_startgame_args');
    if ($this->whiteAlgorithm !== null) {
      $xfer += $output->writeFieldBegin('whiteAlgorithm', TType::STRING, 1);
      $xfer += $output->writeString($this->whiteAlgorithm);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->blackAlgorithm !== null) {
      $xfer += $output->writeFieldBegin('blackAlgorithm', TType::STRING, 2);
      $xfer += $output->writeString($this->blackAlgorithm);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class ChessGameServer_startgame_result {
  static $_TSPEC;


  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        );
    }
  }

  public function getName() {
    return 'ChessGameServer_startgame_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ChessGameServer_startgame_result');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

?>
